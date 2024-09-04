<x-layout>
    <x-slot:heading>Login</x-slot:heading>
    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <div class="sm:col-span-4 mt-5">
                            <x-form-label for="email">E-mail</x-form-label>

                            <div class="mt-2">
                                <x-form-input type="email" id="email" name="email" :value="old('email')"
                                              placeholder="abc@xyz.com"
                                              required></x-form-input>
                                <x-form-error name="email"></x-form-error>
                            </div>
                        </div>
                        <div class="sm:col-span-4 mt-5">
                            <x-form-label for="password">Password</x-form-label>

                            <div class="mt-2">
                                <x-form-input type="password" id="password" name="password"
                                              required></x-form-input>
                                <x-form-error name="password"></x-form-error>
                            </div>
                        </div>
                    </x-form-field>
                </div>


            </div>
        </div>


        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button type="submit">Login</x-form-button>
        </div>
    </form>

</x-layout>
