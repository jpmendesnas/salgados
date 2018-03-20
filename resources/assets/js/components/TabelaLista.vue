<template>
        <table class="table table-striped">

            <tbody>
            <tr>
                <th>Cerveja</th>
                <th>Whisky</th>
                <th>Salgados</th>
                <th>Carne</th>
                <th>Refri</th>
                <th>Doces</th>
            </tr>
            <tr>
                <td v-bind="resultado">{{resultado.qtdCerveja+' LATAS'}}</td>
                <td v-bind="resultado">{{resultado.qtdWhisky+' L'}}</td>
                <td v-bind="resultado">{{resultado.qtdSalgados+' UN'}}</td>
                <td v-bind="resultado">{{resultado.qtdCarne+' KG'}}</td>
                <td v-bind="resultado">{{resultado.qtdRefri+' L'}}</td>
                <td v-bind="resultado">{{resultado.qtdDoces+' UN'}}</td>
            </tr>
            </tbody>

        </table>

</template>

<script>
    export default {
        props:['resultado']
    }
</script>
