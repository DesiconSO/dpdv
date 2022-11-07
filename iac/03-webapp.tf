resource "aws_key_pair" "desicon_pk" {
    key_name = "desicon_pk"
    public_key = file("./.pk/desicon_pk.pub")
}

data "aws_ami" "ubuntu" {
    most_recent = "true"

    filter {
        name = "name"
        values = ["ubuntu/images/hvm-ssd/ubuntu-focal-20.04-amd64-server-*"]
    }

    filter {
        name = "virtualization-type"
        values = ["hvm"]
    }

    owners = ["099720109477"]
}

resource "aws_instance" "desicon_web" {
    count = var.SETTINGS.web_app.count
    ami = data.aws_ami.ubuntu.id
    instance_type = var.SETTINGS.web_app.instance_type
    subnet_id = aws_subnet.desicon_public_subnet[count.index].id
    key_name = aws_key_pair.desicon_pk.key_name
    vpc_security_group_ids = [aws_security_group.desicon_web_sg.id]

    tags = {

        Name = "desicon_web_${count.index}"
        Project = "desicon"
    }
}

resource "aws_eip" "desicon_web_eip" {
    count = var.SETTINGS.web_app.count
    instance = aws_instance.desicon_web[count.index].id
    vpc = true

    tags = {
        Name = "desicon_web_eip_${count.index}"
        Project = "desicon"
    }

    connection {
        host    = self.public_ip
        type    = "ssh"
        user    = "ubuntu"
        private_key = file("./.pk/desicon_pk.pem")
    }

    provisioner "remote-exec" {
        inline = ["echo 'built server!'"]
    }

    provisioner "local-exec"{
        command = "echo ${aws_eip.desicon_web_eip[count.index].public_dns} > ansible/hosts"
    }
}
