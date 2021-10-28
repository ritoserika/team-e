<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    このアプリは、あなたの今日の気分に合わせてYoutuberを
                    提案するサービスです。<br>
                    右上のナビゲーションから、あなたの今日の気分に合うものを選んでね！
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
