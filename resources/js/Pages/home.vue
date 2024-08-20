<template>
  <div class="container mt-5">
    <div class="card shadow-sm">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h2 class="mb-0">Posts List</h2>
        <button @click="post_create()" class="btn btn-success">Create New Post</button>
      </div>

      <div class="card-body p-0">
        <table class="table table-striped table-bordered mb-0">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Content</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(post, index) in posts" :key="post.id">
              <th scope="row">{{ index + 1 }}</th>
              <td>{{ post.title }}</td>
              <td>{{ post.detail }}</td>
              <td>
                <div class="btn-group">
                  <button @click="edit_post(post.id)" class="btn btn-outline-primary">Edit</button>
                  <button @click="delete_post(post.id)" class="btn btn-outline-danger">Delete</button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>


export default {

  props: {
    posts: Array,
  },
  methods: {
    delete_post(id) {
      const baseUrl = 'http://localhost/inertia_vue/public';
      if (confirm('Are you sure you want to delete this post?')) {
        this.$inertia.delete(`${baseUrl}/posts/${id}`);
      }
    },

    edit_post(id) {
        const baseUrl = 'http://localhost/inertia_vue/public';
        this.$inertia.get(`${baseUrl}/posts/${id}`);
    },

    post_create() {
        const baseUrl = 'http://localhost/inertia_vue/public';
        this.$inertia.get(`${baseUrl}/create`);
    },

  },
}
</script>
