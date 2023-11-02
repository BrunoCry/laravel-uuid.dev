<template>
    <div class="generate-page">
        <h4 class="mb-3">Generate new UUID</h4>
        <a href="#" @click.prevent="generate($event)" class="btn btn-primary mt-2 mb-4">Generate new UUID</a>

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
            id: '',
            uuid: ''
        }),

        methods: {
            async generate(event) {
                event.target.classList.add('btn-loading')

                await axios.get('api/uuid/generate').then(response => {
                    this.id = response.data.id
                    this.uuid = response.data.uuid
                }).catch(error => {
                    showError(error)
                })

                event.target.classList.remove('btn-loading')
            },

            checkVariables() {
                if(this.id.length != 0 && this.uuid.length != 0) return true
                return false
            }
        }
    }
</script>