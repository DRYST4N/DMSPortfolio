document.getElementById("formPresupuesto").addEventListener("submit", function(e) {
  e.preventDefault();

  // Simulación de cálculo
  const tipo = e.target.tipoWeb.value;
  const extras = parseInt(e.target.paginasExtra.value);
  let base = tipo === "basica" ? 150 : tipo === "multipagina" ? 300 : 500;
  const total = base + extras * 50;

  // Guardar datos temporalmente para luego enviarlos
  localStorage.setItem("datosPresupuesto", JSON.stringify({
    email: e.target.email.value,
    tipo,
    extras,
    total
  }));

  // Mostrar modal de confirmación
  document.getElementById("resultadoPresupuesto").textContent = `El coste estimado es de ${total} €`;
  const modal = new bootstrap.Modal(document.getElementById("modalConfirmacion"));
  modal.show();
});
