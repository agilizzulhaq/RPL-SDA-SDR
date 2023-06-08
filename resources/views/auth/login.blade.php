@extends('auth.layouts')

@section('content')

<div class="grid grid-cols-[1.5fr_2fr]">
    <div class="h-screen bg-white pt-3 px-32 rounded-r-3xl drop-shadow-[0_5px_5px_rgba(0,0,0,0.2)]">
        <div class="max-w-[400px] mx-auto">
            <div class="w-[250px]">
                <img src="/img/logo.png" alt="rosati">
            </div>
            <h1 class="font-bold text-4xl my-3">Login</h1>
            <div class=" mt-4">
                <form action="{{ url('login/proses') }}" method="post">
                    @csrf
                    <div class="">
                        <label for="email" class="block font-bold mb-1">Email</label>
                        <div class="w-full">
                            <input placeholder="admin@rosati.com" type="email" class="rounded-lg border-[1px] w-full py-2 px-3 border-blue-400  @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="password" class="block font-bold mb-1">Password</label>
                        <div class="w-full">
                            <input placeholder="Min. 8 character" type="password" class="rounded-lg border-[1px] w-full py-2 px-3 border-blue-400 @error('password') is-invalid @enderror" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mt-10 w-full">
                        <input type="submit" class="h-[40px] drop-shadow-[0_2px_2px_rgba(0,0,0,0.4)] w-full rounded bg-[#5479F7] text-white font-bold active:drop-shadow-none hover:bg-[#728FEF] active:translate-y-[2px]" value="Login">
                    </div>
                    <div class="border flex justify-center border-b-black w-full my-8 relative">
                        <div class="absolute px-3 bg-white -top-[17px]">or</div>
                    </div>
                    
                </form>
                <a href="{{ route('auth.google') }}">
                <button class="flex font-bold hover:bg-slate-200 justify-center items-center gap-3 py-3 w-full h-[40px] mt-3 border-black border-[1px] rounded">
                    <div class="w-7">
                        <img src="/img/google.png" alt="">
                    </div>
                    Continue with Google
                </button>
            </div>
        </div>
    </div>
    <div class="flex h-screen justify-center items-center">
        <div class="w-[500px] h-[500px]">
            <img src="/img/cuate.png" alt="">
        </div>
    </div>
</div>

    
@endsection