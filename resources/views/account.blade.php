<x-layout>
    <x-navbar></x-navbar>
    <div class="vh-100">
        <div class="h-100 p-3 mb-2 bg-dark text-success d-flex justify-content-center align-items-center">
            @if (!session()->has('email'))
                <form class="w-25 bg-secondary rounded-3 p-5" style="--bs-bg-opacity: .2;" method="POST" action="/account">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ old('email') }}" required>

                        @error('email')
                            <p class="text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>

                        @error('password')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success text-dark">Submit</button>
                </form>
            @else
                <form class="w-25 bg-secondary rounded-3 p-5" style="--bs-bg-opacity: .2;" method="POST" action="/">
                    @csrf

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" value="{{ session('username') }}" required>

                        @error('username')
                            <p class="text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>

                        @error('password')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ session('email') }}" required>

                        @error('email')
                            <p class="text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" aria-describedby="emailHelp" value="{{ session('phone') }}" required>

                        @error('phone')
                            <p class="text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="url" class="form-control" id="facebook" name="facebook" aria-describedby="emailHelp" value="{{ session('facebook') }}" required>

                        @error('facebook')
                            <p class="text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="twitter" class="form-label">Twitter</label>
                        <input type="url" class="form-control" id="twitter" name="twitter" aria-describedby="emailHelp" value="{{ session('twitter') }}" required>

                        @error('twitter')
                            <p class="text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="url" class="form-control" id="instagram" name="instagram" aria-describedby="emailHelp" value="{{ session('instagram') }}" required>

                        @error('instagram')
                            <p class="text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success text-dark">Submit</button>
                </form>
            @endif

        </div>
    </div>
</x-layout>