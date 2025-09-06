<div
    class="mx-4 p-6 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 dark:bg-gray-800">

    {{-- Heading --}}
    <div class="flex justify-between items-center mb-6">
        <div>
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white">
                @lang('modules.settings.printerSetting')
            </h3>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                @lang('modules.settings.printerSettingDescription')
            </p>
        </div>
        <x-button type="button" wire:click="showAddPrinterModal" >
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                <span class="text-sm">@lang('modules.printerSetting.addPrinter')</span>
            </div>
        </x-button>
    </div>



    {{-- Printer List --}}
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
        @forelse ($printers as $index => $printer)
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow border p-5 flex flex-col justify-between relative group transition hover:shadow-xl">
                <div class="absolute -top-2 -left-2 w-8 h-8 bg-gray-300 text-white rounded-full flex items-center justify-center text-sm font-bold border-2 border-white dark:border-gray-800 shadow-sm">
                    {{ $index + 1 }}
                </div>
                <div class="flex items-center mb-2">
                    <h4 class="font-semibold text-lg truncate flex-1">
                        <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                        </svg>
                        {{ $printer->name ?? '--' }}</h4>
                    @if ($printer->is_default)
                        <span class="ml-2 px-2 py-0.5 rounded text-xs bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">@lang('modules.printerSetting.default')</span>
                    @endif
                </div>
                <div class="flex items-center space-x-2 mb-2">
                    <span class="text-xs px-2 py-0.5 rounded {{ $printer->is_active ? 'bg-green-100 text-green-800' : 'bg-gray-200 text-gray-600' }}">
                        {{ $printer->is_active ? __('app.active') : __('app.inactive') }}
                    </span>
                    {{-- @if ($printer->printing_choice == 'directPrint')
                        <span class="text-xs px-2 py-0.5 rounded {{ $printer->printer_connected ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                            {{ $printer->printer_connected ? __('modules.printerSetting.connected') : __('modules.printerSetting.disconnected') }}
                        </span>
                    @endif --}}
                </div>

                        <div class="text-sm text-gray-700 dark:text-gray-300 mb-4">
                        <div class="mb-1">
                            <strong>@lang('modules.printerSetting.kitchens') ({{ count($printer->kot_details) }}):</strong>
                            <ul class="mt-1 ml-2 list-disc text-xs">
                                @forelse ($printer->kot_details as $kot)
                                    <li class="text-blue-700 dark:text-blue-200">{{ $kot->name }}</li>
                                @empty
                                    <li class="text-gray-400">--</li>
                                @endforelse
                            </ul>
                        </div>
                        <div class="mb-1">
                            <strong>@lang('modules.printerSetting.orders') ({{ count($printer->order_details) }}):</strong>
                            <ul class="mt-1 ml-2 list-disc text-xs">
                                @forelse ($printer->order_details as $order)
                                    <li class="text-green-700 dark:text-green-200">{{ $order->name }}</li>
                                @empty
                                    <li class="text-gray-400">--</li>
                                @endforelse
                            </ul>
                        </div>

                    <div>
                        <strong>@lang('modules.printerSetting.printingChoice'):</strong>
                        @if ($printer->printing_choice === 'directPrint')
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" clip-rule="evenodd"></path>
                                </svg>
                                @lang('modules.printerSetting.directPrint')
                            </span>
                            <div class="mt-2 text-xs text-gray-600 dark:text-gray-300">
                                <strong>@lang('modules.printerSetting.details'):</strong>
                                <ul class="ml-2 mt-1">

                                    @if($printer->type === 'network')
                                        {{-- <li>
                                            <span class="font-semibold">@lang('modules.printerSetting.printerIPAddress'):</span>
                                            {{ $printer->ip_address ?? '--' }}
                                        </li>
                                        <li>
                                            <span class="font-semibold">@lang('modules.printerSetting.printerPortAddress'):</span>
                                            {{ $printer->port ?? '--' }}
                                        </li> --}}
                                    @elseif($printer->type === 'windows')
                                        <li>
                                            <span class="font-semibold">@lang('modules.printerSetting.shareName'):</span>
                                            {{ $printer->share_name ?? '--' }}
                                        </li>
                                    @endif
                                    <li>
                                        <span class="font-semibold">@lang('modules.printerSetting.printFormat'):</span>
                                        {{ $printer->print_format ?? '--' }}
                                    </li>
                                </ul>
                            </div>
                        @elseif ($printer->printing_choice === 'browserPopupPrint')
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                <svg width="16px" height="16px" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><circle cx="96" cy="96" r="74" stroke="#000000" stroke-width="12"></circle><ellipse cx="96" cy="96" stroke="#000000" stroke-width="12" rx="30" ry="74"></ellipse><path stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="12" d="M28 72h136M28 120h136"></path></g></svg>
                                @lang('modules.printerSetting.browserPopupPrint')
                            </span>
                        @else
                            <span class="text-gray-500 dark:text-gray-400">--</span>
                        @endif
                    </div>

                </div>
                <div class="flex space-x-2 mt-auto">
                    <x-button wire:click="editPrinter({{ $printer->id }})" size="sm" >@lang('app.edit')</x-button>
                    @if (!$printer->is_default)
                        <x-danger-button wire:click="showDeletePrinter({{ $printer->id }})" size="sm">@lang('app.delete')</x-danger-button>
                    @endif
                    <x-secondary-button wire:click="togglePrinterStatus({{ $printer->id }})" size="sm">
                        {{ $printer->is_active ? __('app.deactivate') : __('app.activate') }}
                    </x-secondary-button>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center text-gray-400 py-12">
                <svg class="mx-auto mb-2 w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m-6 4h6a2 2 0 002-2v-6a2 2 0 00-2-2h-6a2 2 0 00-2 2v6a2 2 0 002 2z" /></svg>
                <div>@lang('messages.noPrinterAdded')</div>
            </div>
        @endforelse
    </div>

    @if($desktopApp && $desktopApp->is_active)
        {{-- Desktop App Connection Information --}}
        <div class="md:col-span-2 mt-6 p-4 bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg mb-8">
            <h4 class="text-lg font-semibold text-blue-900 dark:text-blue-100 mb-3">
                <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                @lang('modules.printerSetting.desktopAppConnection')
            </h4>
            <div class="my-3 p-3 bg-yellow-100 border-l-4 border-yellow-400 text-yellow-800 rounded">
                <p>@lang('superadmin.desktopApplicationSettingsNote')</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-blue-800 dark:text-blue-200 mb-2">
                        @lang('modules.printerSetting.domainUrl')
                    </label>
                    <div class="flex">
                        <input type="text"
                            id="domainUrl"
                            value="{{ config('app.url') }}"
                            readonly
                            class="flex-1 px-3 py-2 bg-white dark:bg-gray-800 border border-blue-300 dark:border-blue-600 rounded-l-md text-sm text-gray-700 dark:text-gray-300 focus:outline-none">
                        <button type="button"
                            onclick="copyToClipboard('domainUrl', '{{ config('app.url') }}')"
                            class="px-3 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-r-md text-sm transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-blue-800 dark:text-blue-200 mb-2">
                        @lang('modules.printerSetting.branchKey')
                    </label>
                    <div class="flex">
                        <input type="password"
                            id="branchKey"
                            value="{{ auth()->user()->restaurant->branches->first()?->unique_hash ?? 'No branch found' }}"
                            readonly
                            class="flex-1 px-3 py-2 bg-white dark:bg-gray-800 border border-blue-300 dark:border-blue-600 rounded-l-md text-sm text-gray-700 dark:text-gray-300 focus:outline-none">
                        <button type="button"
                            onclick="copyToClipboard('branchKey', '{{ auth()->user()->restaurant->branches->first()?->unique_hash ?? '' }}')"
                            class="px-3 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                        </button>
                        <button type="button" onclick="toggleBranchKeyVisibility()" class="px-3 py-2 bg-gray-200 hover:bg-gray-300 text-gray-700 dark:bg-gray-700 dark:text-gray-200 rounded-r-md text-sm transition-colors ml-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                        <button type="button" onclick="showResetBranchKeyModal()" class="px-3 flex items-center gap-2 py-2 bg-red-600 hover:bg-red-700 text-white text-sm rounded ml-1 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Reset Branch Key
                        </button>
                    </div>
                </div>
            </div>

            <div class="mt-3 text-sm text-blue-700 dark:text-blue-300">

                <p class="mb-2">
                    <strong>@lang('modules.printerSetting.instructions'):</strong>
                </p>

                <ol class="list-decimal list-inside space-y-1 ml-2">
                    <li>@lang('modules.printerSetting.instruction1')</li>
                    <li>@lang('modules.printerSetting.instruction2')</li>
                    <li>@lang('modules.printerSetting.instruction3')</li>
                    <li>@lang('modules.printerSetting.instruction4')</li>
                </ol>
            </div>
        </div>

    {{-- Desktop App Download Section --}}

        <div class="md:col-span-2 mt-6 p-4 bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg mb-8">
            <h4 class="text-lg font-semibold text-green-900 dark:text-green-100 mb-3">
                <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                @lang('modules.printerSetting.downloadDesktopApp')
            </h4>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-3" >
                <!-- Windows -->
                @if(!empty($desktopApp->windows_file_path))
                <div class="text-center">
                    <h6 class="font-medium text-sm text-gray-900 dark:text-white mb-2 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white mr-3" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <rect width="512" height="512" rx="64" fill="#0078D6"/>
                            <rect x="48"  y="96" width="192" height="144" fill="#FFFFFF"/>
                            <rect x="272" y="96" width="192" height="144" fill="#FFFFFF"/>
                            <rect x="48"  y="272" width="192" height="144" fill="#FFFFFF"/>
                            <rect x="272" y="272" width="192" height="144" fill="#FFFFFF"/>
                        </svg>    Windows
                    </h6>
                    @if(!empty($desktopApp->windows_file_path))
                        <a href="{{ $desktopApp->windows_file_path }}" target="_blank"
                           class="inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 bg-white border border-blue-300 rounded hover:bg-blue-50 dark:bg-gray-700 dark:text-blue-400 dark:border-gray-600 dark:hover:bg-gray-600 transition">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>

                            Download
                        </a>
                    @else
                        <span class="inline-block px-4 py-2 text-sm text-gray-400 bg-gray-100 border border-gray-200 rounded dark:bg-gray-700 dark:text-gray-500 dark:border-gray-600">No file available</span>
                    @endif
                </div>
                @endif
                @if(!empty($desktopApp->mac_intel_file_path))
                <!-- Mac Intel -->
                <div class="text-center" >
                    <h6 class="font-medium text-sm text-gray-900 dark:text-white mb-2 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white mr-3" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M339 70c17-20 29-49 26-70-24 1-52 16-68 36-15 18-28 47-24 74 26 2 53-15 66-40zM352 128c-32-2-61 18-79 18-19 0-50-18-83-18-64 0-134 58-134 162 0 140 108 221 134 221 22 0 34-15 66-15 31 0 41 15 66 15 27 0 69-32 96-78-90-35-84-159 4-192-24-34-59-54-95-54z" fill="#000000"/>
                        </svg>
                        Mac Intel</h6>
                    @if(!empty($desktopApp->mac_intel_file_path))
                        <a href="{{ $desktopApp->mac_intel_file_path }}" target="_blank"
                           class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-300 rounded hover:bg-gray-50 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-600 transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                            Download
                        </a>
                    @else
                        <span class="inline-block px-4 py-2 text-sm text-gray-400 bg-gray-100 border border-gray-200 rounded dark:bg-gray-700 dark:text-gray-500 dark:border-gray-600">No file available</span>
                    @endif
                </div>
                @endif
                @if(!empty($desktopApp->mac_silicon_file_path))
                <!-- Mac Silicon -->
                <div class="text-center">
                    <h6 class="font-medium text-sm text-gray-900 dark:text-white mb-2 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white mr-3" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M339 70c17-20 29-49 26-70-24 1-52 16-68 36-15 18-28 47-24 74 26 2 53-15 66-40zM352 128c-32-2-61 18-79 18-19 0-50-18-83-18-64 0-134 58-134 162 0 140 108 221 134 221 22 0 34-15 66-15 31 0 41 15 66 15 27 0 69-32 96-78-90-35-84-159 4-192-24-34-59-54-95-54z" fill="#000000"/>
                        </svg>
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                        Mac Silicon</h6>
                    @if(!empty($desktopApp->mac_silicon_file_path))
                        <a href="{{ $desktopApp->mac_silicon_file_path }}" target="_blank"
                           class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-300 rounded hover:bg-gray-50 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-600 transition">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                            Download
                        </a>
                    @else
                        <span class="inline-block px-4 py-2 text-sm text-gray-400 bg-gray-100 border border-gray-200 rounded dark:bg-gray-700 dark:text-gray-500 dark:border-gray-600">No file available</span>
                    @endif
                </div>
                @endif
                @if(!empty($desktopApp->linux_file_path))
                <!-- Linux -->
                <div class="text-center">
                    <h6 class="font-medium text-sm text-gray-900 dark:text-white mb-2 flex items-center justify-center  ">
                        <svg class="w-6 h-6 text-white mr-3" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M256 40c-58 0-106 48-106 108 0 55 44 175 106 175s106-120 106-175C362 88 314 40 256 40z"
                                  fill="#000000"/>
                            <circle cx="220" cy="148" r="26" fill="#FFFFFF"/>
                            <circle cx="292" cy="148" r="26" fill="#FFFFFF"/>
                            <circle cx="220" cy="148" r="12" fill="#000000"/>
                            <circle cx="292" cy="148" r="12" fill="#000000"/>
                            <path d="M256 352c-72 0-144 36-144 108h288c0-72-72-108-144-108z"
                                  fill="#FDB813"/>
                        </svg>
                        Linux</h6>
                    @if(!empty($desktopApp->linux_file_path))
                        <a href="{{ $desktopApp->linux_file_path }}" target="_blank"
                           class="inline-flex items-center px-4 py-2 text-sm font-medium text-orange-600 bg-white border border-orange-300 rounded hover:bg-orange-50 dark:bg-gray-700 dark:text-orange-400 dark:border-gray-600 dark:hover:bg-gray-600 transition">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                            Download
                        </a>
                    @else
                        <span class="inline-block px-4 py-2 text-sm text-gray-400 bg-gray-100 border border-gray-200 rounded dark:bg-gray-700 dark:text-gray-500 dark:border-gray-600">No file available</span>
                    @endif
                </div>
                @endif
            </div>
        </div>
    @endif

    {{-- Add/Edit Printer Modal --}}
    @if ($showModal)
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/60">
            <div class="relative w-full max-w-4xl mx-4 bg-white dark:bg-gray-900 rounded-xl shadow-lg p-8 animate-fade-in transform -translate-y-20">
                <!-- Close Button -->
                <button wire:click="closeModal"
                    class="absolute top-3 right-3 text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 text-2xl font-bold focus:outline-none"
                    aria-label="Close">
                    &times;
                </button>
                <!-- Modal Title -->
                <h2 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">
                    {{ $id ? __('modules.settings.editPrinter') : __('modules.settings.addPrinter') }}
                </h2>
                <!-- Form -->
                <form wire:submit.prevent="{{ $id ? 'update' : 'submitForm' }}" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Left Column -->
                        <div class="space-y-4">
                            <div>
                                <x-label for="title" :value="__('modules.printerSetting.title')" />
                                <x-input id="title" type="text" wire:model="title" class="mt-1 block w-full" placeholder="{{ __('placeholders.addPrinterName') }}" />

                                <x-input-error for="title" class="mt-2" />
                            </div>
                                                        <!-- KOT Multi-Select -->
                            <div>
                                <x-label value="{{ __('modules.printerSetting.kotSelection') }}" />
                                @if (!$id)
                                    <div class="mb-2 text-xs text-gray-500 dark:text-gray-400">
                                        @lang('modules.printerSetting.selectIdleKitchens')
                                    </div>
                                @else
                                    <div class="mb-2 text-xs text-gray-500 dark:text-gray-400">
                                        @lang('modules.printerSetting.selectKitchensForPrinter')
                                    </div>
                                @endif
                                <div class="grid grid-cols-1 gap-2 mt-2">
                                    @foreach ($kots->where('is_active', true) as $kot)
                                        @php

                                            $isCurrentlyAssigned = $kot->assignment_status === 'assigned';
                                            $isAssignedToThisPrinter = $id && is_array($selectedKots) && in_array($kot->id, $selectedKots);
                                            $canSelect = !$isCurrentlyAssigned || $isAssignedToThisPrinter;
                                        @endphp
                                        <div class="flex items-center justify-between p-2 rounded border {{ $isCurrentlyAssigned ? 'bg-gray-50 dark:bg-gray-700 border-gray-200 dark:border-gray-600' : 'bg-white dark:bg-gray-800 border-gray-200 dark:border-gray-600' }}">
                                            <label class="flex items-center space-x-2 flex-1">
                                                <input type="checkbox"
                                                    wire:model="selectedKots"
                                                    value="{{ $kot->id }}"
                                                    class="form-checkbox text-blue-600 rounded-md"
                                                    {{ !$canSelect ? 'disabled' : '' }}>
                                                <span class="text-sm {{ $isCurrentlyAssigned ? 'text-gray-500 dark:text-gray-400' : 'text-gray-700 dark:text-gray-200' }}">
                                                    {{ $kot->name }}
                                                </span>
                                            </label>
                                            <div class="flex items-center space-x-2">
                                                @if ($isCurrentlyAssigned)
                                                    @if ($isAssignedToThisPrinter)
                                                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            @lang('modules.printerSetting.currentlyAssigned')
                                                        </span>
                                                    @else
                                                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-800 dark:bg-orange-900 dark:text-orange-200">
                                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            @lang('modules.printerSetting.assigned')
                                                        </span>
                                                        <span class="text-xs text-gray-500 dark:text-gray-400">
                                                            {{ $kot->assigned_printer_name }}
                                                        </span>
                                                    @endif
                                                @else
                                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        @lang('modules.printerSetting.idle')
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <x-input-error for="selectedKots" class="mt-2" />
                                @if (!empty($selectedKots))
                                    <div class="mt-2 text-xs text-gray-500 dark:text-gray-400">
                                        <strong>@lang('modules.printerSetting.selectedKitchens'):</strong>
                                        <span class="text-gray-700 dark:text-gray-300">
                                            {{ implode(', ', $kots->whereIn('id', $selectedKots)->pluck('name')->toArray()) }}
                                        </span>
                                    </div>
                                @endif
                            </div>
                                                        <!-- Order Multi-Select -->
                            <div>
                                <x-label value="{{ __('modules.printerSetting.orderSelection') }}" />
                                @if (!$id)
                                    <div class="mb-2 text-xs text-gray-500 dark:text-gray-400">
                                        @lang('modules.printerSetting.selectIdlePosTerminals')
                                    </div>
                                @else
                                    <div class="mb-2 text-xs text-gray-500 dark:text-gray-400">
                                        @lang('modules.printerSetting.selectPosTerminalsForPrinter')
                                    </div>
                                @endif
                                <div class="grid grid-cols-1 gap-2 mt-2">
                                    @foreach ($orders as $order)
                                        @php
                                            $isCurrentlyAssigned = $order->assignment_status === 'assigned';
                                            $isAssignedToThisPrinter = $id && in_array($order->id, $selectedOrders ?? []);
                                            $canSelect = !$isCurrentlyAssigned || $isAssignedToThisPrinter;
                                        @endphp
                                        <div class="flex items-center justify-between p-2 rounded border {{ $isCurrentlyAssigned ? 'bg-gray-50 dark:bg-gray-700 border-gray-200 dark:border-gray-600' : 'bg-white dark:bg-gray-800 border-gray-200 dark:border-gray-600' }}">
                                            <label class="flex items-center space-x-2 flex-1">
                                                <input type="checkbox"
                                                    wire:model="selectedOrders"
                                                    value="{{ $order->id }}"
                                                    class="form-checkbox text-blue-600 rounded-md"
                                                    {{ !$canSelect ? 'disabled' : '' }}>
                                                <span class="text-sm {{ $isCurrentlyAssigned ? 'text-gray-500 dark:text-gray-400' : 'text-gray-700 dark:text-gray-200' }}">
                                                    {{ $order->name }}
                                                </span>
                                            </label>
                                            <div class="flex items-center space-x-2">
                                                @if ($isCurrentlyAssigned)
                                                    @if ($isAssignedToThisPrinter)
                                                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            @lang('modules.printerSetting.currentlyAssigned')
                                                        </span>
                                                    @else
                                                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-800 dark:bg-orange-900 dark:text-orange-200">
                                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            @lang('modules.printerSetting.assigned')
                                                        </span>
                                                        <span class="text-xs text-gray-500 dark:text-gray-400">
                                                            {{ $order->assigned_printer_name }}
                                                        </span>
                                                    @endif
                                                @else
                                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        @lang('modules.printerSetting.idle')
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <x-input-error for="selectedOrders" class="mt-2" />
                                @if (!empty($selectedOrders))
                                    <div class="mt-2 text-xs text-gray-500 dark:text-gray-400">
                                        <strong>@lang('modules.printerSetting.selectedPosTerminal'):</strong>
                                        <span class="text-gray-700 dark:text-gray-300">
                                            {{ implode(', ', $orders->whereIn('id', $selectedOrders)->pluck('name')->toArray()) }}
                                        </span>
                                    </div>
                                @endif
                            </div>
                            <!-- Is Default Checkbox -->
                            <div>
                                <label class="flex items-center">
                                    <input type="checkbox" wire:model="isDefault" class="form-checkbox text-blue-600 rounded-md" />
                                    <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">@lang('modules.printerSetting.isDefault')</span>
                                </label>
                                <x-input-error for="isDefault" class="mt-2" />
                            </div>
                        </div>
                        <!-- Right Column -->
                        <div class="space-y-4">
                            <div>
                                <x-label for="printChoice" :value="__('modules.printerSetting.printChoice')" />
                                <select id="printChoice" wire:model.live="printChoice" class="mt-1 block w-full border-gray-300 dark:bg-gray-800 dark:border-gray-600 dark:text-white rounded-md shadow-sm">
                                    <option value="browserPopupPrint">@lang('modules.printerSetting.browserPopupPrint')</option>
                                    <option value="directPrint">@lang('modules.printerSetting.directPrint')</option>
                                </select>
                                <x-input-error for="printChoice" class="mt-2" />
                            </div>
                            @if ($printChoice == 'directPrint')
                                <div>
                                    <x-label for="printerType" value="{{ __('modules.printerSetting.printerType') }}" />
                                    <select id="printerType" wire:model.live="printerType" class="mt-1 block w-full border-gray-300 dark:bg-gray-800 dark:border-gray-600 dark:text-white rounded-md shadow-sm">
                                        <option value="">@lang('Select')</option>
                                        <option value="network">@lang('modules.printerSetting.networkPrinter')</option>
                                        <option value="windows">@lang('modules.printerSetting.usbPrinter')</option>
                                    </select>
                                    <x-input-error for="printerType" class="mt-2" />
                                </div>
                            @endif
                            @if ($printerType === 'windows' && $printChoice == 'directPrint')
                                <div>
                                    <x-label for="shareName" value="{{ __('modules.printerSetting.shareName') }}" />
                                    <x-input id="shareName" type="text" wire:model="shareName" class="mt-1 block w-full" placeholder="{{ __('placeholders.addPrinterSharedName') }}" />
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                        @lang('modules.printerSetting.shareNameDescription')
                                    </p>

                                    <x-input-error for="shareName" class="mt-2" />
                                </div>
                            @endif

                            @if ($printChoice == 'directPrint')
                                <div>
                                    <x-label for="selectprintFormat" value="{{ __('modules.printerSetting.printFormat') }}" />
                                    <select id="selectprintFormat" wire:model.defer="selectprintFormat" class="mt-1 block w-full border-gray-300 dark:bg-gray-800 dark:border-gray-600 dark:text-white rounded-md shadow-sm">
                                        <option value="">@lang('Select')</option>
                                        <option value="thermal56mm">@lang('modules.printerSetting.thermal56mm')</option>
                                        <option value="thermal80mm">@lang('modules.printerSetting.thermal80mm')</option>
                                        <option value="thermal112mm">@lang('modules.printerSetting.thermal112mm')</option>
                                    </select>
                                    <x-input-error for="selectprintFormat" class="mt-2" />
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="flex justify-end pt-6 space-x-3">
                        <x-button type="submit" wire:loading.attr="disabled">{{ $id ? __('app.update') : __('app.save') }}</x-button>
                        <x-button-cancel wire:click="closeModal">@lang('app.cancel')</x-button-cancel>
                    </div>
                </form>
            </div>
        </div>
    @endif

    {{-- Delete Confirmation Modal --}}
    <x-confirmation-modal wire:model.live="confrimDeletePrinter">
        <x-slot name="title">@lang('modules.printerSetting.deletePrinter')?</x-slot>
        <x-slot name="content">@lang('modules.printerSetting.deletePritnerConfirm')</x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('confrimDeletePrinter')" wire:loading.attr="disabled">{{ __('Cancel') }}</x-secondary-button>
            @if ($printer)
                <x-danger-button class="ml-3" wire:click='confirmdeletePrinter' wire:loading.attr="disabled">{{ __('Delete') }}</x-danger-button>
            @endif
        </x-slot>
    </x-confirmation-modal>

    <!-- Modal for Reset Branch Key Confirmation -->
<div id="resetBranchKeyModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8 max-w-md w-full">
        <h3 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Confirm Reset Branch Key</h3>
        <p class="mb-6 text-gray-700 dark:text-gray-300">Are you sure you want to reset the branch key? This action cannot be undone.</p>
        <div class="flex justify-end gap-2">
            <button type="button" onclick="closeResetBranchKeyModal()" class="px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-700 dark:bg-gray-700 dark:text-gray-200 rounded">Cancel</button>
            <button type="button" wire:click="resetBranchKey" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded">Reset</button>
        </div>
    </div>
</div>

</div>

<script>
    function copyToClipboard(elementId, text) {
        const element = document.getElementById(elementId);
        const button = element.nextElementSibling;
        const originalText = button.innerHTML;
        if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard.writeText(text).then(function() {
                showCopySuccess(button, originalText);
            }).catch(function(err) {
                fallbackCopy(element, button, originalText);
            });
        } else {
            fallbackCopy(element, button, originalText);
        }
    }
    function fallbackCopy(element, button, originalText) {
        element.select();
        element.setSelectionRange(0, 99999);
        try {
            document.execCommand('copy');
            showCopySuccess(button, originalText);
        } catch (err) {
            showCopyError(button, originalText);
        }
    }
    function showCopySuccess(button, originalText) {
        button.innerHTML = `<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>`;
        button.classList.remove('bg-blue-600', 'hover:bg-blue-700');
        button.classList.add('bg-green-600');
        const toast = document.createElement('div');
        toast.className = 'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-50';
        toast.textContent = 'Copied to clipboard!';
        document.body.appendChild(toast);
        setTimeout(() => {
            button.innerHTML = originalText;
            button.classList.remove('bg-green-600');
            button.classList.add('bg-blue-600', 'hover:bg-blue-700');
            document.body.removeChild(toast);
        }, 2000);
    }
    function showCopyError(button, originalText) {
        button.innerHTML = `<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>`;
        button.classList.remove('bg-blue-600', 'hover:bg-blue-700');
        button.classList.add('bg-red-600');
        const toast = document.createElement('div');
        toast.className = 'fixed top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-lg shadow-lg z-50';
        toast.textContent = 'Failed to copy. Please select and copy manually.';
        document.body.appendChild(toast);
        setTimeout(() => {
            button.innerHTML = originalText;
            button.classList.remove('bg-red-600');
            button.classList.add('bg-blue-600', 'hover:bg-blue-700');
            document.body.removeChild(toast);
        }, 3000);
    }

    function toggleBranchKeyVisibility() {
        const input = document.getElementById('branchKey');
        if (input.type === 'password') {
            input.type = 'text';
        } else {
            input.type = 'password';
        }
    }

    function showResetBranchKeyModal() {
        document.getElementById('resetBranchKeyModal').classList.remove('hidden');
    }
    function closeResetBranchKeyModal() {
        document.getElementById('resetBranchKeyModal').classList.add('hidden');
    }
</script>



