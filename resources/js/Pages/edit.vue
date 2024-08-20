<template>
    <div class="row justify-content-center">
      <div class="col-md-7">
        <h1>Edit Post</h1>
  
        <form @submit.prevent="submit">
  
          <div class="form-group">
            <label for="title">Title:</label>
            <input v-model="form.title" type="text" class="form-control" placeholder="Enter title" />
  
            <div v-if="form.errors.title" class="text-danger">
              {{ form.errors.title }}
            </div>
  
          </div>
  
          <div class="form-group">
            <label for="detail">Detail:</label>
            <textarea v-model="form.detail" class="form-control" rows="5" placeholder="detail"></textarea>
  
            <div v-if="form.errors.detail" class="text-danger">
              {{ form.errors.detail }}
            </div>
  
          </div>
          <button type="submit" class="btn btn-success">Update</button>
          
        </form>
  
      </div>
    </div>
  </template>
    
    <script>
  
    import { useForm } from '@inertiajs/vue3';
  
    export default {
      props: {
        post: Object,
      },
      setup(props) {
        const form = useForm({
          title: props.post.title,
          detail: props.post.detail,
        });
    
        function submit() {
          const baseUrl = 'http://localhost/inertia_vue/public';
          form.put(`${baseUrl}/posts/${props.post.id}`);
        }
    
        return { form, submit };
      },
    }
    </script>
    