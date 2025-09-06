@props(['show' => false, 'orderId' => null, 'kotId' => null])

<div x-data="{ 
    show: @entangle($attributes->wire('model')),
    printDirectly() {
        // Direct print functionality
        const printUrl = '{{ route('kot.print', ['kot' => $kotId]) }}';
        const printWindow = window.open(printUrl, '_blank', 'width=800,height=600');
        if (printWindow) {
            printWindow.onload = function() {
                printWindow.print();
                setTimeout(() => printWindow.close(), 1000);
            };
        }
        this.show = false;
    },
    printPreview() {
        // Open print preview in new tab
        const printUrl = '{{ route('kot.print', ['kot' => $kotId]) }}';
        window.open(printUrl, '_blank');
        this.show = false;
    },
    printToPDF() {
        // Generate PDF and download
        const printUrl = '{{ route('kot.print', ['kot' => $kotId, 'format' => 'pdf']) }}';
        const link = document.createElement('a');
        link.href = printUrl;
        link.download = 'kot-{{ $kotId }}.pdf';
        link.click();
        this.show = false;
    }
}" 
x-show="show" 
x-transition:enter="ease-out duration-300"
x-transition:enter-start="opacity-0 scale-95"
x-transition:enter-end="opacity-100 scale-100"
x-transition:leave="ease-in duration-200"
x-transition:leave-start="opacity-100 scale-100"
x-transition:leave-end="opacity-0 scale-95"
class="fixed inset-0 z-50 overflow-y-auto"
style="display: none;">
    
    <!-- Backdrop -->
    <div class="fixed inset-0 bg-black bg-opacity-50" x-on:click="show = false"></div>
    
    <!-- Dialog -->
    <div class="relative min-h-screen flex items-center justify-center p-4">
        <div class="relative bg-white dark:bg-gray-800 rounded-lg shadow-xl max-w-md w-full mx-auto" x-on:click.stop>
            
            <!-- Header -->
            <div class="flex items-center justify-between p-6 border-b border-gray-200 dark:border-gray-700">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    @lang('modules.order.printOptions')
                </h3>
                <button type="button" 
                        x-on:click="show = false"
                        class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Content -->
            <div class="p-6">
                <div class="space-y-4">
                    <!-- Direct Print Option -->
                    <button type="button"
                            x-on:click="printDirectly()"
                            class="w-full flex items-center justify-center px-4 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                        </svg>
                        @lang('modules.order.printDirectly')
                    </button>
                    
                    <!-- Print Preview Option -->
                    <button type="button"
                            x-on:click="printPreview()"
                            class="w-full flex items-center justify-center px-4 py-3 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        @lang('modules.order.printPreview')
                    </button>
                    
                    <!-- Download PDF Option -->
                    <button type="button"
                            x-on:click="printToPDF()"
                            class="w-full flex items-center justify-center px-4 py-3 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        @lang('modules.order.downloadPDF')
                    </button>
                </div>
                
                <!-- Order Info -->
                <div class="mt-6 p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <div class="text-sm text-gray-600 dark:text-gray-300">
                        <p><strong>@lang('modules.order.orderNumber'):</strong> #{{ $orderId }}</p>
                        <p><strong>@lang('modules.order.kotNumber'):</strong> #{{ $kotId }}</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-2">
                            @lang('modules.order.selectPrintOption')
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <div class="flex justify-end gap-3 p-6 border-t border-gray-200 dark:border-gray-700">
                <button type="button"
                        x-on:click="show = false"
                        class="px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 bg-gray-100 dark:bg-gray-600 hover:bg-gray-200 dark:hover:bg-gray-500 rounded-lg transition-colors">
                    @lang('app.cancel')
                </button>
            </div>
        </div>
    </div>
</div>
