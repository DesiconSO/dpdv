resource "aws_s3_bucket" "desicon_bucket" {
    bucket = "desicon-s3-file-storage"

    tags = {
        Name = "desicon_bucket"
        Project = "desicon"
    }
}

resource "aws_s3_bucket_acl" "desicon_bucket_acl" {
    bucket = aws_s3_bucket.desicon_bucket.id
    acl    = "private"
}
