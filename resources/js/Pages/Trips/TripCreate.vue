<template>
  <div class="w-full p-6">
    <h1 class="text-center text-3xl">Viajes</h1>
    <div v-if="form.errors.length" class="mb-4">
      <p class="text-red-500">Por favor corrija los siguientes errores:</p>
      <ul>
        <li
          v-for="(error, index) in form.errors"
          :key="index"
          class="text-sm text-red-500"
        >
          {{ error }}
        </li>
      </ul>
    </div>

    <form @submit.prevent="submit" class="space-y-4" method="post">
      <div>
        <label for="nombre" class="block text-sm font-medium text-gray-700"
          >Nombre:</label
        >
        <input
          v-model="form.name"
          type="text"
          id="nombre"
          class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md"
        />
      </div>

      <div class="flex space-x-4">
        <div class="w-1/2">
          <label
            for="departamento"
            class="block text-sm font-medium text-gray-700"
            >Departamento:</label
          >
          <select
            v-model="form.departament_id"
            id="departamento"
            class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md"
          >
            <option
              v-for="departament in departaments"
              :key="departament.id"
              :value="departament.id"
            >
              {{ departament.name }}
            </option>
          </select>
        </div>

        <div class="w-1/2">
          <label for="ciudad" class="block text-sm font-medium text-gray-700"
            >Ciudad:</label
          >
          <select
            v-model="form.city_id"
            id="ciudad"
            class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md"
          >
            <option v-for="city in cities" :key="city.id" :value="city.id">
              {{ city.city }}
            </option>
          </select>
        </div>
      </div>
      <div>
        <table class="w-full mt-4">
          <thead>
            <tr>
              <th class="border px-2 py-1">Ciudad</th>
              <th class="border px-2 py-1">Departamento</th>
              <th class="border px-2 py-1">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="city in selectedCities" :key="city.id">
              <td class="border px-2 py-1">{{ city.city }}</td>
              <td class="border px-2 py-1">{{ city.departament.name }}</td>
              <td class="border px-2 py-1">
                <button type="button" @click="removeCity(index)">
                  Eliminar
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <button
        type="submit"
        class="mt-2 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
      >
        Submit
      </button>
    </form>
    <table class="w-full mt-4">
      <thead>
        <tr>
          <th class="border px-2 py-1">Nombre de Usuario</th>
          <th class="border px-2 py-1">Ciudad</th>
          <th class="border px-2 py-1">Departamento</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="trip in trips" :key="trip.id">
          <td class="border px-2 py-1">{{ trip.user.name }}</td>
          <td class="border px-2 py-1">{{ trip.city.city }}</td>
          <td class="border px-2 py-1">{{ trip.city.departament.name }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>


<script setup>
import { useForm } from "@inertiajs/vue3";
import axios from "axios";
import { ref, watch } from "vue";

const form = useForm({
  name: null,
  city_id: null,
  departament_id: null,
  city_ids: [],
});

const cities = ref([]);
const selectedCities = ref([]);

defineProps({
  cities: Object,
  departaments: Object,
  trips: Array
});

watch(
  () => form.departament_id,
  async (newDepartmentId) => {
    if (newDepartmentId) {
      const response = await axios.get(`/api/cities/${newDepartmentId}`);
      cities.value = response.data;
    } else {
      cities.value = [];
    }
  }
);

watch(
  () => form.city_id,
  () => {
    const city = cities.value.find((city) => city.id === form.city_id);
    if (city) {
      selectedCities.value.push(city);
      form.city_ids.push(city.id);
    }
    console.log(form.city_ids);
  }
);

const removeCity = (index) => {
  form.city_ids.splice(index, 1);
  selectedCities.value.splice(index, 1);
  console.log(form.city_ids);
};

const submit = () => {
  form.post(route("trips.store"), {
    onFinish: () => form.reset(),
  });
};
</script>
