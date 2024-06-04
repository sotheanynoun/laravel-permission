<form method="POST" action="{{ route('profile.destroy') }}">
  @csrf
  @method('DELETE')

  <div class="mb-4">
      <x-label for="password" :value="__('Password')" />
      <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
  </div>

  <div class="flex items-center justify-end mt-4">
      <x-danger-button class="ml-4">
          {{ __('Delete Account') }}
      </x-danger-button>
  </div>
</form>
