<template>
    <div class="card">
        <div class="card-content">
            <span class="card-title">Threads</span>

            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Thread</th>
                        <th>Reply</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="thread in threads_response.data">
                        <td>{{ thread.id }}</td>
                        <td>{{ thread.title }}</td>
                        <td>0</td>
                        <td>
                            <a :href="'/threads/' + thread.id">open</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                threads_response:[]
            }

        },
        mounted() {
            window.axios.get('/threads').then((response) => {
                this.threads_response = response.data
            })
        }
    }
</script>
