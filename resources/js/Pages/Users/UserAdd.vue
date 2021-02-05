<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Create Administrative Users
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="relative flex items-top justify-left p-5">
            <form class="w-full">
              <h2 class="text-2xl mb-4">Create Users Form</h2>
              <div class="mb-4">
                <jet-label for="name" value="Name" />
                <jet-input
                  id="name"
                  type="text"
                  class="mt-1 block w-full"
                  required
                  autofocus
                  autocomplete="name"
                />
              </div>

              <div class="mb-4">
                <jet-label for="email" value="Email" />
                <jet-input
                  id="email"
                  type="email"
                  class="mt-1 block w-full"
                  required
                />
              </div>

              <div class="mb-4">
                <jet-label for="password" value="Password" />
                <jet-input
                  id="password"
                  type="password"
                  class="mt-1 block w-full"
                  required
                  autocomplete="new-password"
                />
              </div>

              <div class="mb-4">
                <jet-label
                  for="password_confirmation"
                  value="Confirm Password"
                />
                <jet-input
                  id="password_confirmation"
                  type="password"
                  class="mt-1 block w-full"
                  required
                  autocomplete="new-password"
                />
              </div>
              <jet-button class="mb-4"> Register </jet-button>
              <jet-button class="mb-4 bg-red-900"> Cancel </jet-button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import JetButton from "@/Jetstream/Button";
import JetInput from "@/Jetstream/Input";
import JetCheckbox from "@/Jetstream/Checkbox";
import JetLabel from "@/Jetstream/Label";

export default {
  components: {
    AppLayout,
    JetButton,
    JetInput,
    JetCheckbox,
    JetLabel,
  },
  methods: {
    handleSubmit() {},
  },
};
</script>
<style>
</style>