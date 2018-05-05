const validar = () => {

  if (document.formularioDados.nome.value === "") {
    alert('Preencha o campo com seu nome');
    document.formularioDados.nome.focus();
    return false;
  }

  if (document.formularioDados.data.value === "") {
    alert('Preencha o campo com sua data de nascimento');
    document.formularioDados.data.focus();
    return false;
  }

  if (document.formularioDados.kilos.value === "") {
    alert('Preencha o campo com seus kilos');
    document.formularioDados.kilos.focus();
    return false;
  }

  if (document.formularioDados.meters.value === "") {
    alert('Preencha o campo com sua metragem');
    document.formularioDados.meters.focus();
    return false;
  }
  if (document.formularioDados.centimeters.value === "") {
    alert('Preencha o campo com seus centimetros');
    document.formularioDados.centimeters.focus();
    return false;
  }

}
