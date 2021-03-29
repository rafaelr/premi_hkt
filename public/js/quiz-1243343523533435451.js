$('#quiz').quiz({
  //resultsScreen: '#results-screen',
/counter: true,
  //homeButton: '#custom-home',
  counterFormat: 'Questão %current de %total',
  questions: [
    {
      'q': 'O Museu do Louvre tem no total 50 mil obras de arte, ou seja, para conseguir ver todas, por pelo menos 30 segundos, levaria cerca de 200 dias.?',
      'options': [
        'Verdadeiro',
        'Falso'
      ],
      'correctIndex': 1,
      'correctResponse': 'Bom trabalho, vamos para a próxima?.',
      'incorrectResponse': ':( Poxa, não foi dessa vez... Continue tentando!'
    },
    {
      'q': 'A Suíça, situada na Europa, tem quatro idiomas oficiais, sendo eles o Alemão, a Língua Romanche, o Francês e o Italiano.',
      'options': [
        'Verdadeiro',
        'Falso'
      ],
      'correctIndex': 0,
     'correctResponse': 'Bom trabalho, vamos para a próxima?.',
       'incorrectResponse': ':( Poxa, não foi dessa vez... Continue tentando!'
    }
  ]
});
