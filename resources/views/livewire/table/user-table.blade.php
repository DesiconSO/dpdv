<div class="grid w-full grid-cols-5 col-span-12 gap-4 ">
    <div class="relative col-span-12 overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        {{ __("table.id") }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __("table.name") }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __("table.role") }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $userData)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $userData->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $userData->name }}
                    </td>
                    <td class="px-6 py-4">
                        <select id="userRole" wire:change="changeRole({{ $userData->id }}, $event.target.value)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>{{ count($userData->getRoleNames($userData->id)) ? ucfirst($userData->getRoleNames()[0]) : 'Null' }}</option>
                            @foreach ($userRoles as $role)
                            <option value="{{ $role->data() }}">{{ ucfirst($role->data()) }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td class="py-4">
                        <livewire:components.popup-component :userData="$userData" text="{{ __('form.delete') }}" />
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-span-12">
        {{ $users->links() }}
    </div>
</div>