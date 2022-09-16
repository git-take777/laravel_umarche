<x-tests.app>
  <x-slot name="header">
    header2
  </x-slot>
  コンポーネント2
  <x-test-class-base classBaseMessage="メッセージです"/>

  <div class="mb-4">
    <x-test-class-base classBaseMessage="メッセージです"  defaultMessage="初期値を変更しています"  />
  </div><!-- /.mb-4 -->
</x-tests.app>