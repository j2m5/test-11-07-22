<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Автомобиль</div>
                    <div class="card-body">
                        <div>{{ vehicle.model }}</div>
                        <div>
                            <small>Водитель: {{ vehicle.driver.name }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { show } from '../api'
export default {
    name: 'VehicleShow',
    data() {
        return {
            vehicle: {}
        }
    },
    created() {
        this.getVehicle()
    },
    methods: {
        getVehicle() {
            show('vehicles', this.$route.params.id).then((res) => {
                this.vehicle = res.data.vehicle || {}
            })
        }
    }
}
</script>

<style scoped>

</style>
