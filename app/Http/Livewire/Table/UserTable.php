<?php

namespace App\Http\Livewire\Table;

use App\Enums\UserRoles;
use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    public $userRole;

    public function render()
    {
        $userRoles = UserRoles::cases();

        $users = User::with('roles')->paginate(20);
        return view('livewire.table.user-table', compact('users', 'userRoles'));
    }

    public function changeRole(User $user, $value)
    {
        if (is_null($user->getRoleNames()->first())) {
            $user->assignRole($value);
            return redirect()->route('user.index')->with('success', __('form.user_changed'));
        } elseif ($value != $user->getRoleNames()->first() || !is_null($user->getRoleNames()->first())) {
            $user->removeRole($user->getRoleNames()->first());
            $user->assignRole($value);
            return redirect()->route('user.index')->with('success', __('form.user_changed'));
        }
    }

    public function removeUser(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', __('form.user_deleted'));
    }
}
