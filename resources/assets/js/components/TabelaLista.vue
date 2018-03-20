<template>
        <table class="table table-striped">

            <tbody>
            <tr>
                <th>Cerveja</th>
                <th>Whisky</th>
                <th>Doces</th>
                <th>Salgados</th>
                <th>Carne</th>
            </tr>
            <tr>
                <td v-bind="resultado">{{resultado.qtdCerveja}}</td>
                <td>aa</td>
                <td>aa</td>
                <td>aa</td>
                <td>aa</td>
            </tr>
            </tbody>

        </table>

</template>

<script>
    export default {
        props:['resultado']
    }
</script>
