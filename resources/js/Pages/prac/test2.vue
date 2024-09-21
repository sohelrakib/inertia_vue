<template>
    <div class="row justify-content-center">
      <div class="col-md-7">

        <!-- <element1></element1> -->

        <!-- Loop through the array and pass each name to Element1 -->
         <h3>{{ title }}</h3>
        <div v-for="(item, index) in namesArray" :key="index">
            <element1 :name="item.name"></element1>
        </div>

        <h1>Create Post</h1>

        <form @submit.prevent="submit">

          <div class="form-group">
            <label for="title">Title:</label>
            <input v-model="form.title" type="text" class="form-control" placeholder="Enter title" />

            <div v-if="form.errors.title" class="text-danger">
              {{ form.errors.title }}
            </div>

          </div>

          <div class="form-group">
            <label for="content">Content:</label>
            <textarea v-model="form.content" class="form-control" rows="5" placeholder="Enter content"></textarea>

            <div v-if="form.errors.content" class="text-danger">
              {{ form.errors.content }}
            </div>

          </div>
          <button type="submit" class="btn btn-success">Submit</button>

        </form>

      </div>
    </div>
  </template>

<script>
import { useForm } from '@inertiajs/vue3';
import element1 from './element/element1.vue';

export default {
    components: {
        element1,  // Register Element1 locally
    },

    props: {
        namesArray: Array, // Accept the array as a prop
        title: String,
    },

    setup() {

        const baseUrl = 'http://localhost/inertia_vue/public';
        const form = useForm({
            title: '',
            content: '',
        });

        // Array of names to loop over
        // const namesArray = [
        //     { name: 'John' },
        //     { name: 'Doe' },
        //     { name: 'Alice' },
        //     { name: 'Bob' },
        // ];

        function submit() {
            form.post(`${baseUrl}/prac/test2/submit`);
        }

        return { form, submit };
        // return { form, submit, namesArray };
    },
}
</script>
