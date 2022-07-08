<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Jetstream/Welcome.vue";
import { Link } from "@inertiajs/inertia-vue3";
import { useForm } from "@inertiajs/inertia-vue3";

const props = defineProps({
  reports: Array,
  drivers: Array,
});

const form = useForm({
  driver_id: "",
  monday_hours: null,
  tuesday_hours: null,
  wednesday_hours: null,
  thursday_hours: null,
  friday_hours: null,
  saturday_hours: null,
  sunday_hours: null,
  monday_fixed: null,
  tuesday_fixed: null,
  wednesday_fixed: null,
  thursday_fixed: null,
  friday_fixed: null,
  saturday_fixed: null,
  sunday_fixed: null,
  food_allowance: null,
  fuel_allowance: null,
  notes: null,
  net_pay: null,
  daily_rate: {
    monday: null,
    tuesday: null,
    wednesday: null,
    thursday: null,
    friday: null,
    saturday: null,
    sunday: null,
  },
});
const calculatePay = () => {
  form.net_pay = monday_hours * daily_rate.monday;
};

function storeReport() {
  form.post("/reports");
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
            <div class="sm:col-span-7">
              <label
                for="country"
                class="block text-sm font-medium text-gray-700"
              >
                Driver
              </label>
              <div class="mt-1">
                <select
                  id="driver"
                  name="driver"
                  autocomplete="driver-name"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.driver_id"
                  required
                >
                  <option value="" disabled>Please Select A Driver</option>
                  <option
                    v-for="(driver, key) in drivers"
                    v-bind:key="key"
                    v-bind:value="key"
                  >
                    {{ driver }}
                  </option>
                </select>
              </div>
            </div>

            <div class="sm:col-span-1">
              <label for="city" class="block text-sm font-medium text-gray-700">
                Monday <span class="font-bold text-red-500">H</span> £14
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="city"
                  id="city"
                  autocomplete="address-level2"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.monday_hours"
                  @change="calculatePay"
                />
              </div>
            </div>

            <div class="sm:col-span-1">
              <label
                for="region"
                class="block text-sm font-medium text-gray-700"
              >
                Tuesday <span class="font-bold text-red-500">H</span> £14
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="region"
                  id="region"
                  autocomplete="address-level1"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.tuesday_hours"
                  @change="calculatePay"
                />
              </div>
            </div>

            <div class="sm:col-span-1">
              <label for="city" class="block text-sm font-medium text-gray-700">
                Wednesday <span class="font-bold text-red-500">H</span> £14
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="city"
                  id="city"
                  autocomplete="address-level2"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.wednesday_hours"
                  @change="calculatePay"
                />
              </div>
            </div>

            <div class="sm:col-span-1">
              <label
                for="region"
                class="block text-sm font-medium text-gray-700"
              >
                Thursday <span class="font-bold text-red-500">H</span> £14
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="region"
                  id="region"
                  autocomplete="address-level1"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.thursday_hours"
                  @change="calculatePay"
                />
              </div>
            </div>

            <div class="sm:col-span-1">
              <label for="city" class="block text-sm font-medium text-gray-700">
                Friday <span class="font-bold text-red-500">H</span> £14
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="city"
                  id="city"
                  autocomplete="address-level2"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.friday_hours"
                  @change="calculatePay"
                />
              </div>
            </div>

            <div class="sm:col-span-1">
              <label
                for="region"
                class="block text-sm font-medium text-gray-700"
              >
                Saturday <span class="font-bold text-red-500">H</span> £14
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="region"
                  id="region"
                  autocomplete="address-level1"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.saturday_hours"
                  @change="calculatePay"
                />
              </div>
            </div>

            <div class="sm:col-span-1">
              <label for="city" class="block text-sm font-medium text-gray-700">
                Sunday <span class="font-bold text-red-500">H</span> £14
              </label>
              <div class="mt-1">
                <input
                  type="text"
                  name="city"
                  id="city"
                  autocomplete="address-level2"
                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  v-model="form.sunday_hours"
                  @change="calculatePay"
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
                  v-model="form.monday_fixed"
                  @change="calculatePay"
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
                  v-model="form.tuesday_fixed"
                  @change="calculatePay"
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
                  v-model="form.wednesday_fixed"
                  @change="calculatePay"
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
                  v-model="form.thursday_fixed"
                  @change="calculatePay"
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
                  v-model="form.friday_fixed"
                  @change="calculatePay"
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
                  v-model="form.saturday_fixed"
                  @change="calculatePay"
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
                  v-model="form.sunday_fixed"
                  @change="calculatePay"
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
                  @change="calculatePay"
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
                  @change="calculatePay"
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
                    v-model="form.notes"
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
              Net Pay
            </label>
            <div class="mt-1">
              <input
                disabled
                type="text"
                name="net-pay"
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
