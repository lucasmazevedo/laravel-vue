import VueRouter from "vue-router";
import UsersComponent from "./components/users/Users";
import Example2 from "./components/Example2";

const routes = [
  {
    path: "/",
    component: UsersComponent,
    name: "home"
  },
  {
    path: "/second",
    component: Example2,
    name: "second"
  }
];

const router = new VueRouter({
  routes,
  mode: 'history',
});

export default router;