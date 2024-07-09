document.addEventListener("DOMContentLoaded", function() {
    const cantidadMeses = document.getElementById("cantidadMeses");
    const tipoPago = document.getElementById("tipoPago");
    const saldoFinanciar = document.getElementById("saldoFinanciar");
    const valorCuota = document.getElementById("valorCuota");
    const cuotas = document.getElementById("cuotas");
    const saldoFinal = document.getElementById("saldoFinal");
    const prima = document.getElementById("prima");
    const precio = document.getElementById("precio");
    const papeleria = document.getElementById("papeleria");
    const seguro = document.getElementById("seguro");
    const formasPago = document.getElementById("formasPago");
    const añosSeguro = document.getElementById("añosSeguro"); // Agregado para obtener el label añosSeguro

    function calculateSaldoFinanciar() {
        const precioMoto = parseFloat(precio.textContent);
        const primaValue = parseFloat(prima.value);
        const papeleriaValue = parseFloat(papeleria.textContent);
        const seguroValue = parseFloat(seguro.textContent);

        const saldoFinanciarValue = precioMoto - primaValue + papeleriaValue + seguroValue;
        saldoFinanciar.textContent = saldoFinanciarValue.toFixed(2);
    }

    function calculateAñosSeguro() {
        const meses = parseFloat(cantidadMeses.value);

        let añosSeguroValue = 0;
        if (meses <= 18) {
            añosSeguroValue = 1;
        } else if (meses >= 19 && meses <= 24) {
            añosSeguroValue = 2;
        }

        añosSeguro.textContent = añosSeguroValue;
    }

    function calculateCuotas() {
        const meses = parseFloat(cantidadMeses.value);
        let factor = 1;

        switch (tipoPago.value) {
            case "PAGOS QUINCENALES":
                factor = 2;
                break;
            case "PAGOS SEMANALES":
                factor = 4.33;
                break;
        }

        const cuotasValue = meses * factor;
        cuotas.textContent = cuotasValue.toFixed(0);
    }

    function calculateCuota() {
        const saldoFinanciarValue = parseFloat(saldoFinanciar.textContent);
        const cuotasValue = parseFloat(cuotas.textContent);
        let interesAnual = 0.36;
        let interes = 0;

        switch (tipoPago.value) {
            case "PAGOS MENSUALES":
                interes = interesAnual / 12;
                break;
            case "PAGOS QUINCENALES":
                interes = interesAnual / 24;
                break;
            case "PAGOS SEMANALES":
                interes = (interesAnual / 12) / 4.33;
                break;
        }

        const cuota = (saldoFinanciarValue * interes) / (1 - Math.pow(1 + interes, -cuotasValue));
        valorCuota.textContent = cuota.toFixed(2);

        calculateSaldoFinal();
    }

    function calculateSaldoFinal() {
        const cuotasValue = parseFloat(cuotas.textContent);
        const valorCuotaValue = parseFloat(valorCuota.textContent);
        const primaValue = parseFloat(prima.value);

        const saldoFinalValue = (cuotasValue * valorCuotaValue) + primaValue;
        saldoFinal.textContent = saldoFinalValue.toFixed(2);
    }

    function updateFormasPagoLabel() {
        formasPago.textContent = tipoPago.value;
    }

    cantidadMeses.addEventListener("input", () => {
        calculateAñosSeguro(); // Llama a calculateAñosSeguro al cambiar la cantidad de meses
        calculateCuotas();
        calculateCuota();
    });

    tipoPago.addEventListener("change", () => {
        calculateCuotas();
        calculateCuota();
        updateFormasPagoLabel();
    });

    prima.addEventListener("input", () => {
        calculateSaldoFinanciar();
        calculateCuota();
    });

    // Llamada inicial para calcular todo al cargar la página
    calculateSaldoFinanciar();
    calculateAñosSeguro(); // Llamada inicial para calcular añosSeguro
    calculateCuotas();
    updateFormasPagoLabel();
});