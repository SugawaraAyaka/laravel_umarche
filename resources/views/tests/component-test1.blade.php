<x-tests.app>
    <x-slot name="header">ヘッダー</x-slot>
コンポーネント１
    <x-tests.card title="タイトル1" content="本文" :message="$message" />
    <x-tests.card title="タイトル2" />
    <x-tests.card title="CSSを変更したい" class="bg-red-300"/>
</x-tests.app>
