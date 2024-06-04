<form method="POST" action="{{ route('password.update') }}">
  @csrf
  @method('PATCH')

  <!-- Current Password -->
  <div class="mb-4">
      <x-label for="current_password" :value="__('Current Password')" />
      <x-input id="current_password" class="block mt-1 w-full" type="password" name="current_password" required />
  </div>

  <!-- New Password -->
  <div class="mb-4">
      <x-label for="password" :value="__('New Password')" />
      <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
  </div>

  <!-- Confirm New Password -->
  <div class="mb-4">
      <x-label for="password_confirmation" :value="__('Confirm New Password')" />
      <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
  </div>

  <div class="flex items-center justify-end mt-4">
      <x-button class="ml-4">
          {{ __('Update Password') }}
      </x-button>
  </div>
</form>
