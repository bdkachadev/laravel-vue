<template>
    <div>
        <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Users</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Users List</h6>
                        </div>
                        <button id="show-modal" @click="showModal = true">Show Modal</button>
                        <!-- use the modal component, pass in the prop -->
                        <modal v-if="showModal" @close="showModal = false">
                            <!--
                            you can use custom content here to overwrite
                            default content
                            -->
                            <h3 slot="header">custom header</h3>
                        </modal>
                        <div class="card-body">
                            <div class="table-responsive">
                                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>first Name</th>
                                    <th>last Name</th>
                                    <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr v-for="user in users" :key="user.id">
                                    <td>{{user.id}}</td>
                                    <td>{{user.first_name}}</td>                      
                                    <td>{{user.last_name}}</td>
                                    <td>{{user.email}}</td>
                                    <td><a href="#" @click="editModal(user)"><i class="fa fa-edit text-blue"></i></a>
                                    /
                                    <a href="#" @click="deleteUser(user)"><i class="fa fa-trash text-red"></i></a>

                                    </td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
    </div>
</template>

<script>
import "datatables.net-dt/js/dataTables.dataTables"
import "datatables.net-dt/css/jquery.dataTables.min.css"
import Modal from './components/Modal.vue'


    export default {
    components: {
        Modal
     },
        mounted() {
        this.loadUsers();
    },
      data() {
        return {
          users: {},
        showModal: false

        };
      },
    

    methods:{
     loadUsers(){
        axios.get("users").then(function(response){
        this.users=response.data.data;
        console.log(response)
          }.bind(this))
    },

        // created() {
        //     this.loadUsers();
        // }
    }
    }
</script>

