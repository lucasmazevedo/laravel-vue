<template>
  <div>
    <div v-if="loading">Data is loading...</div>
    <div v-else>
      <div class="row mb-2" v-for="row in rows" :key="'row' + row">
        <div class="col"
        v-for="(user, column) in usersInRow(row)" 
        :key="'row' + row + column">

        <users-list-item 
        :item-title="user.name"
        :item-content="user.abbr"
        :price="user.status">
        </users-list-item>
        </div>
        <div class="col" v-for="p in placeholderInRow(row)" :key="'placeholder' + row + p"></div>
      </div>
    </div>
  </div>
</template>

<script>
import UsersListItem from './UsersListItem';

export default {
  components: {
    UsersListItem,
  },
  data() {
    return {
      users: null,
      loading: false,
      columns: 3,
      // rows: this.users.lenght
    }
  },
  computed: {
    rows() {
      return this.users == null ? 0 : Math.ceil(this.users.length / this.columns);
    }
  },
  methods: {
    usersInRow(row) {
      return this.users.slice((row - 1) * this.columns, row * this.columns);
    },

    placeholderInRow(row) {
      return this.columns - this.usersInRow(row).length;
    }
  },
  
  created() {
    this.loading = true;

    const request = axios.get("/api/modalities").then(response => {
      this.users = response.data,
      this.loading = false
    });
  },
  
}
</script>