function mudar(op)
{
  switch(op)
  {
    case 1:   
      window.location = "index.html";  
      break;
    case 2: 
      document.getElementById('principal').className = "invisivel";
      document.getElementById('energia').className = "visivel";
      document.getElementById('mulheres').className = "invisivel";
      document.getElementById('contato').className = "invisivel";  
      break;
    case 3: 
      document.getElementById('principal').className = "invisivel";
      document.getElementById('energia').className = "invisivel";
      document.getElementById('mulheres').className = "visivel";
      document.getElementById('contato').className = "invisivel";  
      break;
    case 4: 
      document.getElementById('principal').className = "invisivel";
      document.getElementById('energia').className = "invisivel";
      document.getElementById('mulheres').className = "invisivel";
      document.getElementById('contato').className = "visivel";  
      break;
  }
}