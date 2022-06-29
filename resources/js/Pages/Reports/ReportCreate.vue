<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Jetstream/Welcome.vue";
import { Link } from "@inertiajs/inertia-vue3";
import { useForm } from "@inertiajs/inertia-vue3";

const props = defineProps({
  reports: Array,
});



const form = useForm({
  driver_id: 1,
  total_hours: null,
  monday_hours: null,
  tuesday_hours: null,
  wednesday_hours: null,
  thursday_hours: null,
  friday_hours: null,
  saturday_hours: null,
  sunday_hours: null,
  monday_cleaning: null,
  tuesday_cleaning: null,
  wednesday_cleaning: null,
  thursday_cleaning: null,
  friday_cleaning: null,
  saturday_cleaning: null,
  sunday_cleaning: null,
  food_allowance: null,
  fuel_allowance: null,
  net_pay: null,
  actual_pay: null,
});

function storeReport() {
  form.post('/reports');
}
</script>

<template>
  <AppLayout title="Reports">
    <form
      @submit.prevent="storeReport"
      class="py-12 mx-auto space-y-8 divide-y divide-gray-200 max-w-7xl sm:px-6 lg:px-8"
    >
      <div class="space-y-8 divide-y divide-gray-200">
        <div class="pt-8">
          <div>
            <h3 class="text-lg font-medium leading-6 text-gray-900">
              Driver Report
            </h3>
          </div>
          <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-7">
            <div class="sm:col-span-3">
              <label
                for="country"
                class="block text-sm font-medium text-gray-700"
              >
                Week
              </label>
              <div class="mt-1">
                <select
                  id="country"
                  name="country"
                  autocomplete="country-name"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                >
                  <option>Week 1</option>
                  <option>Week 2</option>
                  <option>Week 3</option>
                </select>
              </div>
            </div>

            <div class="sm:col-span-4">
              <label
                for="country"
                class="block text-sm font-medium text-gray-700"
              >
                Driver
              </label>
              <div class="mt-1">
                <select
                  id="country"
                  name="country"
                  autocomplete="country-name"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                >
                  <option>John Corti</option>
                  <option>Shuja Zaheer</option>
                  <option>Satnam</option>
                </select>
              </div>
            </div>

            <div class="sm:col-span-1">
              <label for="city" class="block text-sm font-medium text-gray-700">
                Monday <span class="font-bold text-red-500">W</span> £14
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="city"
                  id="city"
                  autocomplete="address-level2"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.monday_hours"
                />
              </div>
            </div>

            <div class="sm:col-span-1">
              <label
                for="region"
                class="block text-sm font-medium text-gray-700"
              >
                Tuesday <span class="font-bold text-red-500">W</span> £14
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="region"
                  id="region"
                  autocomplete="address-level1"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.tuesday_hours"
                />
              </div>
            </div>

            <div class="sm:col-span-1">
              <label for="city" class="block text-sm font-medium text-gray-700">
                Wednesday <span class="font-bold text-red-500">W</span> £14
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="city"
                  id="city"
                  autocomplete="address-level2"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.wednesday_hours"
                />
              </div>
            </div>

            <div class="sm:col-span-1">
              <label
                for="region"
                class="block text-sm font-medium text-gray-700"
              >
                Thursday <span class="font-bold text-red-500">W</span> £14
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="region"
                  id="region"
                  autocomplete="address-level1"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.thursday_hours"
                />
              </div>
            </div>

            <div class="sm:col-span-1">
              <label for="city" class="block text-sm font-medium text-gray-700">
                Friday <span class="font-bold text-red-500">W</span> £14
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="city"
                  id="city"
                  autocomplete="address-level2"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.friday_hours"
                />
              </div>
            </div>

            <div class="sm:col-span-1">
              <label
                for="region"
                class="block text-sm font-medium text-gray-700"
              >
                Saturday <span class="font-bold text-red-500">W</span> £14
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="region"
                  id="region"
                  autocomplete="address-level1"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.saturday_hours"
                />
              </div>
            </div>

            <div class="sm:col-span-1">
              <label for="city" class="block text-sm font-medium text-gray-700">
                Sunday <span class="font-bold text-red-500">W</span> £14
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="city"
                  id="city"
                  autocomplete="address-level2"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.sunday_hours"
                />
              </div>
            </div>

            <div class="sm:col-span-1">
              <label
                for="region"
                class="block text-sm font-medium text-gray-700"
              >
                Monday <span class="font-bold text-violet-500">F</span>
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="region"
                  id="region"
                  autocomplete="address-level1"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.monday_cleaning"
                />
              </div>
            </div>

            <div class="sm:col-span-1">
              <label for="city" class="block text-sm font-medium text-gray-700">
                Tuesday <span class="font-bold text-violet-500">F</span>
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="city"
                  id="city"
                  autocomplete="address-level2"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.tuesday_cleaning"
                />
              </div>
            </div>

            <div class="sm:col-span-1">
              <label
                for="region"
                class="block text-sm font-medium text-gray-700"
              >
                Wednesday <span class="font-bold text-violet-500">F</span>
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="region"
                  id="region"
                  autocomplete="address-level1"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.wednesday_cleaning"
                />
              </div>
            </div>

            <div class="sm:col-span-1">
              <label for="city" class="block text-sm font-medium text-gray-700">
                Thursday <span class="font-bold text-violet-500">F</span>
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="city"
                  id="city"
                  autocomplete="address-level2"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.thursday_cleaning"
                />
              </div>
            </div>

            <div class="sm:col-span-1">
              <label
                for="region"
                class="block text-sm font-medium text-gray-700"
              >
                Friday <span class="font-bold text-violet-500">F</span>
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="region"
                  id="region"
                  autocomplete="address-level1"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.friday_cleaning"
                />
              </div>
            </div>

            <div class="sm:col-span-1">
              <label for="city" class="block text-sm font-medium text-gray-700">
                Saturday <span class="font-bold text-violet-500">F</span>
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="city"
                  id="city"
                  autocomplete="address-level2"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                />
              </div>
            </div>

            <div class="sm:col-span-1">
              <label
                for="region"
                class="block text-sm font-medium text-gray-700"
              >
                Sunday <span class="font-bold text-violet-500">F</span>
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="region"
                  id="region"
                  autocomplete="address-level1"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.sunday_cleaning"
                />
              </div>
            </div>

            <div class="sm:col-span-2">
              <label
                for="region"
                class="block text-sm font-medium text-gray-700"
              >
                Food Allowance
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="region"
                  id="region"
                  autocomplete="address-level1"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.food_allowance"
                />
              </div>
            </div>

            <div class="sm:col-span-2">
              <label
                for="region"
                class="block text-sm font-medium text-gray-700"
              >
                Fuel Allowance
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="region"
                  id="region"
                  autocomplete="address-level1"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.fuel_allowance"
                />
              </div>
            </div>

            <div class="sm:col-span-3">
              <div>
                <label
                  for="comment"
                  class="block text-sm font-medium text-gray-700"
                  >Notes</label
                >
                <div class="mt-1">
                  <textarea
                    rows="4"
                    name="comment"
                    id="comment"
                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="space-y-8 divide-y divide-gray-200">
        <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
          <div class="sm:col-span-2">
            <label for="region" class="block text-sm font-medium text-gray-700">
                Total Pay 
            </label>
            <div class="mt-1">
              <input
                type="text"
                name="region"
                id="region"
                autocomplete="address-level1"
                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
              />
            </div>
          </div>

          <div class="sm:col-span-2">
            <label for="region" class="block text-sm font-medium text-gray-700">
              Net Pay
            </label>
            <div class="mt-1">
              <input
                type="text"
                name="region"
                id="region"
                autocomplete="address-level1"
                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                v-model="form.net_pay"
              />
            </div>
          </div>

          <div class="sm:col-span-2">
            <label for="region" class="block text-sm font-medium text-gray-700">
              Actual Pay
            </label>
            <div class="mt-1">
              <input
                type="text"
                name="region"
                id="region"
                autocomplete="address-level1"
                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                v-model="form.actual_pay"
              />
            </div>
          </div>
        </div>
      </div>

      <div class="pt-5">
        <div class="flex justify-end">
          <button
            type="button"
            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
          >
            Cancel
          </button>
          <button
            type="submit"
            class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
          >
            Save
          </button>
        </div>
      </div>
    </form>
  </AppLayout>
</template>
