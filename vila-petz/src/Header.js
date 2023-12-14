import React from 'react';


const App = () => {
    const headerHTML = () => {
      // Leitura do arquivo HTML usando require
      const headerFile = require('./public/header.html');
  
      // Inserção do HTML usando dangerouslySetInnerHTML
      return { __html: headerFile.default };
    };
    
    return (
      <div>
        <div dangerouslySetInnerHTML={headerHTML()} />
        {/* Restante do conteúdo do seu aplicativo */}
      </div>
    );
  };

export default Header;
