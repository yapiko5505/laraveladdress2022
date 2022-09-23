<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> 
            住所の新規登録
        </h2>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <x-message :message="session('message')" />
    </x-slot>  
    
    
    
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mx-4 sm:p-8">
                    <form method="post" action="{{route('address.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="md:flex items-center mt-8">
                            <div class="w-full flex flex-col">
                            <label for="name" class="font-semibold leading-none mt-4">会社名</label>
                            <input type="text" name="name" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="name" value="{{old('name')}}">
                            </div>

                            <div class="w-full flex flex-col">
                                <label for="postal" class="font-semibold leading-none mt-4">郵便番号</label>
                                <input type="text" name="postal" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="postal" value="{{old('postal')}}">
                            </div>

                            <div class="w-full flex flex-col">
                                <label for="address" class="font-semibold leading-none mt-4">住所</label>
                                <input type="text" name="address" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="address" value="{{old('address')}}">
                            </div>

                            <div class="w-full flex flex-col">
                                <label for="phone" class="font-semibold leading-none mt-4">電話番号</label>
                                <input type="text" name="phone" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="phone" value="{{old('phone')}}">
                            </div>

                            <div class="w-full flex flex-col">
                                <label for="email" class="font-semibold leading-none mt-4">メールアドレス</label>
                                <input type="text" name="email" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="email" value="{{old('email')}}">
                            </div>

                            <div class="w-full flex flex-col">
                                <label for="purpose" class="font-semibold leading-none mt-4">目的</label>
                                <input type="text" name="purpose" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="purpose" value="{{old('purpose')}}">
                            </div>
                        </div>
        
                    
                    
            
                    
        
                    
                    
                    
                    
                    
                    
                        <br>
                        <button class="mt-4" style= "background-color:blue">
                            送信する
                        </button>
                        
                    </form>
                </div>
            </div>

</x-app-layout>