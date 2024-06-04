<form method="POST" action="{{ route('profile.update') }}">
  @csrf
  @method('PATCH')

  <!-- Name -->
  <div class="mb-4">
      <x-label for="name" :value="__('Name')" />
      <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name', auth()->user()->name) }}" required autofocus />
  </div>

  <!-- Email Address -->
  <div class="mb-4">
      <x-label for="email" :value="__('Email')" />
      <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email', auth()->user()->email) }}" required />
  </div>

  <div class="flex items-center justify-end mt-4">
      <x-button class="ml-4">
          {{ __('Update Profile') }}
      </x-button>
  </div>
</form>
