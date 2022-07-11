<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="user">Сотрудник</label>
                    <select v-model.number="query.user" class="form-control" id="user">
                        <option v-for="user in users" :key="user.id" :value="user.id">{{ user.name }}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="category">Категория комфорта</label>
                    <select v-model.number="query.category" class="form-control" id="category">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="model">Модель автомобиля</label>
                    <input v-model="query.model" type="text" class="form-control" id="model">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" @click="getVehicles">Получить список автомобилей</button>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Список доступных автомобилей</div>
                    <div class="card-body">
                        <ul v-if="vehicles.length" class="list-group">
                            <li v-for="vehicle in vehicles" :key="vehicle.id" class="list-group-item">
                                <router-link :to="{ name: 'VehicleShow', params: { id: vehicle.id } }">
                                    {{ vehicle.model }}
                                </router-link>
                            </li>
                        </ul>
                        <div v-else>Автомобилей не найдено</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { index } from '../api'
export default {
    name: 'VehicleList',
    data() {
        return {
            users: [],
            vehicles: [],
            query: {
                user: 1,
                category: 1,
                model: ''
            }
        }
    },
    created() {
        this.getUsers()
    },
    methods: {
        getUsers() {
            index('users').then((res) => {
                this.users = res.data.users || []
            })
        },
        getVehicles() {
            const params = {
                user: this.query.user,
                category: this.query.category,
                model: this.query.model
            }
            index('vehicles', { params }).then((res) => {
                this.vehicles = res.data.vehicles || []
            })
        }
    }
}
</script>

<style scoped>

</style>
