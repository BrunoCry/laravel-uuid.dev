<template>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">{{ appName }}</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <router-link to="/" class="nav-link" exact-active-class="active">List</router-link>
                    </li>

                    <li class="nav-item">
                        <router-link to="/generate" class="nav-link" exact-active-class="active">Generate</router-link>
                    </li>

                    <li class="nav-item">
                        <router-link to="/retrieve" class="nav-link" exact-active-class="active">Retrieve</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        data: () => ({
            appName: import.meta.env.VITE_APP_NAME
        })
    }
</script>