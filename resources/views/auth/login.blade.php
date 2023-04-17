@extends('auth.layouts')

@section('content')

<div class="w-[436px] h-[calc(100vh-170px)] bg-white pt-10 mt-20 mx-auto rounded-lg drop-shadow-[0_5px_5px_rgba(0,0,0,0.4)]">
    <div class="w-44 mx-auto">
        <img src="/img/logo.png" alt="rosati">
    </div>
    <div class=" mt-4">
        <form action="{{ route('authenticate') }}" method="post">
            @csrf
            <div class="mx-4">
                <label for="email" class="block font-bold">Email</label>
                <div class="w-full">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
            <div class="mx-4 mt-2">
                <label for="password" class="block font-bold">Password</label>
                <div class="w-full">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>
            <div class="mt-10 w-max mx-auto">
                <input type="submit" class="h-[40px] drop-shadow-[0_2px_2px_rgba(0,0,0,0.4)] w-[300px] rounded bg-[#5479F7] text-white font-bold active:drop-shadow-none hover:bg-[#728FEF] active:translate-y-[2px]" value="Login">
                <button class="flex font-bold justify-center items-center gap-3 w-[300px] h-[40px] mt-3 border-black border-[1px] rounded">
                    <div class="w-7">
                        <img src="/img/google.png" alt="">
                    </div>
                    Continue with Google
                </button>
            </div>
            
        </form>
    </div>
</div>

    
@endsection