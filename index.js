

$(window).on("load", function () {
  switch (descricao) {
    case "Céu claro":
      styleBody("clear-sky");
      break;
    case "Algumas nuvens":
      styleBody("few-clouds");
      break;
    case "Nuvens dispersas":
      styleBody("scattered-clouds");
      break;
    case "Nublado":
      styleBody("overcast");
      break;
    case "Chuva leve":
      styleBody("light-rain");
      break;
    case "Chuva moderada":
      styleBody("moderate-rain");
      break;
    case "Chuva forte":
      styleBody("heavy-rain");
      break;
    case "Chuva de curta duração":
      styleBody("short-duration-rain");
      break;
    case "Neve leve":
      styleBody("light-snow");
      break;
    case "Neve moderada":
      styleBody("moderate-snow");
      break;
    case "Neve forte":
      styleBody("heavy-snow");
      break;
    case "Tempestade com raios":
      styleBody("thunderstorm");
      break;
    case "Nevoeiro":
      styleBody("fog");
      break;
    default:
      styleBody("clear-sky");
      break;
  }
});

function styleBody(description) {
    const body = document.body;
  
    body.classList.remove(
      "clear-sky",
      "few-clouds",
      "scattered-clouds",
      "overcast",
      "light-rain",
      "moderate-rain",
      "heavy-rain",
      "short-duration-rain",
      "light-snow",
      "moderate-snow",
      "heavy-snow",
      "thunderstorm",
      "fog"
    );
  
    body.classList.add(description);
  }