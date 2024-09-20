<template>
    <div class="container mt-4">
        <h1 class="text-center">Gestión de Cursos - 5to Computación</h1>
        <!-- Tabla para mostrar los cursos -->
        <div class="card">
            <div class="card-header">
                Lista de Cursos
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Carrera</th>
                            <th>Nombre del curso</th>
                            <th>Descripción</th>
                            <th>Nivel</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="curso in cursos" :key="curso.id">
                            <td>{{ curso.id }}</td>
                            <td>{{ curso.carrera_nombre }}</td>
                            <td>{{ curso.nombre }}</td>
                            <td>{{ curso.descripcion }}</td>
                            <td>{{ curso.nivel_nombre }}</td>
                            <td>{{ curso.estado_nombre }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        cursos: {
            type: Array,
            required: true
        }
    }
}
</script>

<style scoped>
/* Estilos específicos para este componente */
</style>
