<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            会社名個別表示
        </h2>
        <x-message :message="session('message')" />
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="my-6">
            <table class="text-left w-full border-collapse mt-8"> 
            <tr class="mt-4" style= "background-color:green">
                    <th class="p-3 text-left text-white">名前</th>
                    <th class="p-3 text-left text-white">郵便番号</th>
                    <th class="p-3 text-left text-white">住所</th>
                    <th class="p-3 text-left text-white">電話番号</th>
                    <th class="p-3 text-left text-white">Email</th>
                    <th class="p-3 text-left text-white">使用目的</th>
                </tr>
                <tr class="bg-white">
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{$address->name}}</td>
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{$address->postal}}</td>
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{$address->address}}</td>
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{$address->phone}}</td>
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{$address->email}}</td>
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{$address->purpose}}</td>
                </tr>
            </table>
            <br>
            <a href="{{route('address.edit', $address)}}"><button class="mt-4" style= "background-color:green"> 編集する</a>
            <form method="post" action="{{route('address.destroy', $address)}}">
                @csrf
                @method('delete')
                <button class="mt-4" style= "background-color:red" onClick="return confirm('本当に削除しますか？');">
                    削除する
                </button>
            </form>
         </div>
    </div>
</x-app-layout>