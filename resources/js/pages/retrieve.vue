<template>
    <div class="retrieve-page">
        <h4 class="mb-3">Retrieve UUID</h4>
        <div class="row mb-4">
            <div class="col-lg-3">
                <input type="number" v-model="form" class="form-control" placeholder="Type ID of UUID">
            </div>
            <div class="col-lg-9">
                <a href="#" @click.prevent="retrieve($event)" class="btn btn-primary">Retrieve</a>
            </div>
        </div>

        <div v-if="checkVariables()">
            <div><b>Response:</b></div>
            <div><b>id:</b> {{ id }}</div>
            <div><b>UUID:</b> {{ uuid }}</div>
        </div>
    </div>
</template>

<script>
    import { showError } from '@/utils.js'

    export default {
        data: () => ({
            form: '',
            id: '',
            uuid: ''
        }),

        methods: {
            async retrieve (event) {
                event.target.classList.add('btn-loading')

                await axios.get('api/uuid/retrieve/' + this.form).then(response => {
                    this.id = response.data.id
                    this.uuid = response.data.uuid
                }).catch(error => {
                    if(error.request.status == 404) {
                        this.id = 'Not found'
                        this.uuid = 'Not found'

                        return
                    }

                    showError(error)
                })

                event.target.classList.remove('btn-loading')
            },

            checkVariables () {
                if(this.id.length != 0 && this.uuid.length != 0) return true
                return false
            }
        }
    }
</script>