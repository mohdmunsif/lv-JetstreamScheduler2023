<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Entity-Groups') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                                <table class="min-w-full divide-y divide-gray-200 w-full">
                                    {{-- {{ dd($grouplist) }} --}}
                                    {{-- {{ dd($arrExample2) }} --}}

                                    <thead>
                                        <tr>
                                            <th scope="col" width="50"
                                                class="px-2 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name
                                            </th>
                                            @for ($i = 0; $i < $grouplist->count(); $i++)
                                                <th scope="col" width="50"
                                                    class="px-2 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    {{ $i + 1 }}
                                                </th>
                                            @endfor
                                            <th scope="col" width="200" class="px-2 py-3 bg-gray-50">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">

                                        @foreach ($entities as $entity)
                                            <tr>
                                                <td
                                                    class="bg-gray-50 text-left text-xs font-medium text-gray-500 tracking-wider center-content w-0.5 center-content py-0.5 px-2">
                                                    {{ $entity->name }}
                                                </td>
                                                @foreach ($grouplist as $group)
                                                    <td class="px-1 py-1 whitespace-nowrap text-sm text-gray-900">
                                                        <input class="form-checkbox text-green-600  cursor-pointer"
                                                            wire:model="arr_entity_groups.{{ $entity->id }}.{{ $group->id }}"
                                                            name="arr_entity_groups.{{ $entity->id }}.{{ $group->id }}"
                                                            type="checkbox" value="{{ $group->group_id }}"
                                                            id="{{ $group->descr }}"
                                                            @isset($arr_entity_groups[$entity->id][$group->id]) @if ($arr_entity_groups[$entity->id][$group->id] == 'true') checked @endif @endisset>

                                                    </td>
                                                    {{-- {{ $entity->id . $group->id }} --}}
                                                    {{-- {{ var_dump($arrExample2[$entity->id][$group->id]) }} --}}
                                                    {{-- <td class="px-1 py-1 whitespace-nowrap text-sm text-gray-900">
                                                        <input class="form-checkbox text-green-600  cursor-pointer"
                                                            name="groups[]" type="checkbox"
                                                            value="{{ $group->group_id }}  id="{{ $group->descr }}"
                                                            @isset($entity) @if (in_array($group->id, $entity?->groups?->pluck('id')?->toArray())) checked @endif @endisset>
                                                    </td> --}}
                                                @endforeach


                                                <td
                                                    class="px-2 py-0.5 whitespace-nowrap text-sm font-medium text-center">
                                                    @if (is_null($entity?->groups?->first()?->id))
                                                    @else
                                                        <a href="{{ route('entitygroupsold.show', $entity?->groups?->first()?->id) }}"
                                                            class="text-blue-600 hover:text-blue-900 mb-2 mr-2">View</a>
                                                        <a href="{{ route('entitygroupsold.edit', $entity?->groups?->first()?->id) }}"
                                                            class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Edit</a>
                                                        <form class="inline-block"
                                                            action="{{ route('entitygroupsold.destroy', $entity?->groups?->first()?->id) }}"
                                                            method="POST" onsubmit="return confirm('Are you sure?');">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}">
                                                            <input type="submit"
                                                                class="text-red-600 hover:text-red-900 mb-2 mr-2"
                                                                value="Delete">
                                                        </form>
                                                    @endif

                                                </td>
                                            </tr>
                                        @endforeach
                                        @json($arr_entity_groups)
                                        {{-- @json_decode($arrExample2) --}}
                                        {{-- {{ var_dump($arrExample2) }} --}}
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <x-button wire:click.prevent="openModal" class="mb-4">
                        Add Entity-Groups
                    </x-button>

                    <div class="overflow-hidden overflow-x-auto mb-4 min-w-full align-middle sm:rounded-md">
                        <table class="min-w-full border divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 w-10 text-left bg-gray-50">
                                    </th>
                                    <th class="px-6 py-3 text-left bg-gray-50">
                                        <span
                                            class="text-xs font-medium tracking-wider leading-4 text-gray-500 uppercase">Name</span>
                                    </th>
                                    <th class="px-6 py-3 text-left bg-gray-50">
                                        <span
                                            class="text-xs font-medium tracking-wider leading-4 text-gray-500 uppercase">Slug</span>
                                    </th>
                                    <th class="px-6 py-3 text-left bg-gray-50">
                                        <span
                                            class="text-xs font-medium tracking-wider leading-4 text-gray-500 uppercase">Active</span>
                                    </th>
                                    <th class="px-6 py-3 text-left bg-gray-50 w-56">
                                    </th>
                                </tr>
                            </thead>

                            <tbody wire:sortable="updateOrder" class="bg-white divide-y divide-gray-200 divide-solid">
                                @foreach ($entityGroups as $entityGroup)
                                    <tr class="bg-white" wire:sortable.item="{{ $entityGroup->id }}"
                                        wire:key="{{ $loop->index }}">
                                        <td class="px-6">
                                            <button wire:sortable.handle>
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 256 256">
                                                    <path fill="none" d="M0 0h256v256H0z" />
                                                    <path fill="none" stroke="#000" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="16"
                                                        d="M156.3 203.7 128 232l-28.3-28.3M128 160v72M99.7 52.3 128 24l28.3 28.3M128 96V24M52.3 156.3 24 128l28.3-28.3M96 128H24M203.7 99.7 232 128l-28.3 28.3M160 128h72" />
                                                </svg>
                                            </button>
                                        </td>
                                        {{-- Inline Edit Start --}}
                                        <td
                                            class="@if ($editedEntityGroupId !== $entityGroup->id) hidden @endif px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                            <input wire:model="group.name" id="group.name"
                                                class="py-2 pr-4 pl-2 mt-2 w-full text-sm rounded-lg border border-gray-400 sm:text-base focus:outline-none focus:border-blue-400" />
                                            @error('group.name')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td
                                            class="@if ($editedEntityGroupId !== $entityGroup->id) hidden @endif px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                            <input wire:model="group.slug" id="group.slug"
                                                class="py-2 pr-4 pl-2 mt-2 w-full text-sm rounded-lg border border-gray-400 sm:text-base focus:outline-none focus:border-blue-400" />
                                            @error('group.slug')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        {{-- Inline Edit End --}}

                                        {{-- Show Group Name/Slug Start --}}
                                        <td
                                            class="@if ($editedEntityGroupId === $entityGroup->id) hidden @endif px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                            {{ $entityGroup->name }}
                                        </td>
                                        <td
                                            class="@if ($editedEntityGroupId === $entityGroup->id) hidden @endif px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                            {{ $entityGroup->slug }}
                                        </td>
                                        {{-- Show Group Name/Slug End --}}

                                        <td class="px-6">
                                            <div
                                                class="inline-block relative mr-2 w-10 align-middle transition duration-200 ease-in select-none">
                                                <input wire:model="active.{{ $entityGroup->id }}"
                                                    wire:click="toggleIsActive({{ $entityGroup->id }})" type="checkbox"
                                                    name="toggle" id="{{ $loop->index . $entityGroup->id }}"
                                                    class="block absolute w-6 h-6 bg-white rounded-full border-4 appearance-none cursor-pointer focus:outline-none toggle-checkbox" />
                                                <label for="{{ $loop->index . $entityGroup->id }}"
                                                    class="block overflow-hidden h-6 bg-gray-300 rounded-full cursor-pointer toggle-label"></label>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                            @if ($editedEntityGroupId === $entityGroup->id)
                                                <x-button wire:click="save">
                                                    Save
                                                </x-button>
                                                <x-button wire:click="cancelGroupEdit">
                                                    Cancel
                                                </x-button>
                                            @else
                                                <x-button wire:click="editGroup({{ $entityGroup->id }})">
                                                    Edit
                                                </x-button>
                                                <button wire:click="deleteConfirm('delete', {{ $entityGroup->id }})"
                                                    class="px-4 py-2 text-xs text-red-500 uppercase bg-red-200 rounded-md border border-transparent hover:text-red-700 hover:bg-red-300">
                                                    Delete
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div
        class="@if (!$showModal) hidden @endif flex items-center justify-center fixed left-0 bottom-0 w-full h-full bg-gray-800 bg-opacity-90">
        <div class="w-1/2 bg-white rounded-lg">
            <form wire:submit.prevent="save" class="w-full">
                <div class="flex flex-col items-start p-4">
                    <div class="flex items-center pb-4 mb-4 w-full border-b">
                        <div class="text-lg font-medium text-gray-900">Create Entity-Group</div>
                        <svg wire:click.prevent="$set('showModal', false)"
                            class="ml-auto w-6 h-6 text-gray-700 cursor-pointer fill-current"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                            <path
                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                        </svg>
                    </div>
                    <div class="mb-2 w-full">
                        <label class="block text-sm font-medium text-gray-700" for="entitygroup.name">
                            Name
                        </label>
                        <input wire:model="entitygroup.name" id="entitygroup.name"
                            class="py-2 pr-4 pl-2 mt-2 w-full text-sm rounded-lg border border-gray-400 sm:text-base focus:outline-none focus:border-blue-400" />
                        @error('entitygroup.name')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2 w-full">
                        <label class="block text-sm font-medium text-gray-700" for="entitygroup.slug">
                            Slug
                        </label>
                        <input wire:model="entitygroup.slug" id="entitygroup.slug"
                            class="py-2 pr-4 pl-2 mt-2 w-full text-sm rounded-lg border border-gray-400 sm:text-base focus:outline-none focus:border-blue-400" />
                        @error('entitygroup.slug')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-4 ml-auto">
                        <button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700"
                            type="submit">
                            Create
                        </button>
                        <button wire:click.prevent="$set('showModal', false)"
                            class="px-4 py-2 font-bold text-white bg-gray-500 rounded" type="button"
                            data-dismiss="modal">
                            Close
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
