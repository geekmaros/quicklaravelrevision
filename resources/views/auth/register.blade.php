<x-layout>
    <x-slot:heading>Register</x-slot:heading>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <div class="sm:col-span-4 mt-5">
                            <x-form-label for="first_name">First Name</x-form-label>

                            <div class="mt-2">
                                <x-form-input id="first_name" name="first_name" placeholder="John "
                                              required></x-form-input>
                                <x-form-error name="first_name"></x-form-error>
                            </div>
                        </div>
                        <div class="sm:col-span-4 mt-5">
                            <x-form-label for="last_name">Last Name</x-form-label>

                            <div class="mt-2">
                                <x-form-input id="last_name" name="last_name" placeholder="Doe"
                                              required></x-form-input>
                                <x-form-error name="last_name"></x-form-error>
                            </div>
                        </div>
                        <div class="sm:col-span-4 mt-5">
                            <x-form-label for="email">E-mail</x-form-label>

                            <div class="mt-2">
                                <x-form-input type="email" id="email" name="email" placeholder="abc@xyz.com"
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
                        <div class="sm:col-span-4 mt-5">
                            <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                            <div class="mt-2">
                                <x-form-input type="password" name="password_confirmation" id="password_confirmation"
                                              required></x-form-input>
                                <x-form-error name="password_confirmation"></x-form-error>
                            </div>
                        </div>
                    </x-form-field>
                </div>

                {{--                Dispaly Errror method one--}}

                {{--                <div class="error-class mt-5">--}}
                {{--                    @if($errors->any())--}}
                {{--                        <ul>--}}
                {{--                            @foreach($errors->all() as $error)--}}
                {{--                                <li class="text-red-500">{{$error}}</li>--}}
                {{--                            @endforeach--}}
                {{--                        </ul>--}}
                {{--                    @endif--}}
                {{--                </div>--}}

            </div>
        </div>


        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button type="submit">Register</x-form-button>
        </div>
    </form>

</x-layout>
