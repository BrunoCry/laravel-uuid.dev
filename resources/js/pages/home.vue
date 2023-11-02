<template>
    <div class="home-page">
        <h4 class="mb-3">List of all UUID's</h4>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th style="width:5%;">ID</th>
                    <th>UUID</th>
                    <th>Created</th>
                </tr>
            </thead>
            <tbody>
                <template v-if="!loaded">
                    <template v-if="list != 0">
                        <tr v-for="row in list" :key="row.id">
                            <td>{{ row.id }}</td>
                            <td>{{ row.uuid }}</td>
                            <td>{{ row.created_at }}</td>
                        </tr>
                    </template>
                    <template v-else>
                        <tr>
                            <td colspan="3">
                                <b>There are no records :(</b>
                            </td>
                        </tr>
                    </template>
                </template>
                <template v-else>
                    <tr>
                        <td colspan="3">
                            <div class="d-flex justify-content-center">
                                <div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                </template>
            </tbody>
        </table>
    </div>
</template>

<script>
    import { showError } from '@/utils.js'

    export default {
        data: () => ({
            list: [],
            loaded: true
        }),

        async created () {
            try {
                await axios.get('api/uuid/list').then(response => {
                    this.list = response.data.models
                }).catch(error => {
                    showError(error)
                })
            } catch(e) {
                showError(e)
            }

            this.loaded = false
        }
    }
</script>