-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Jun-2017 às 03:58
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tecflix`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contribua`
--

CREATE TABLE `contribua` (
  `id_contribua` int(11) NOT NULL,
  `seunome` varchar(85) NOT NULL,
  `serie` varchar(85) NOT NULL,
  `comentario` longtext
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contribua`
--

INSERT INTO `contribua` (`id_contribua`, `seunome`, `serie`, `comentario`) VALUES
(1, 'Gabriel', '13 Reasons Why', 'Ela é legal!\r\n'),
(2, 'Fabiana', 'The 100', ''),
(3, 'Amanda', 'Skins', 'Muito boa'),
(4, 'João', 'Flash', 'A melhor'),
(5, 'Bianca', 'Todo Mundo Odeia o Chris', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `series`
--

CREATE TABLE `series` (
  `id_series` int(11) NOT NULL,
  `img` varchar(85) NOT NULL,
  `nome` varchar(85) NOT NULL,
  `descricao` longtext NOT NULL,
  `ano` year(4) NOT NULL,
  `diretor` varchar(85) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `categoria` varchar(85) NOT NULL,
  `categoria2` varchar(85) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `series`
--

INSERT INTO `series` (`id_series`, `img`, `nome`, `descricao`, `ano`, `diretor`, `preco`, `categoria`, `categoria2`) VALUES
(1, 'img/twd.jpg', 'The Walking Dead', 'The Walking Dead conta a história de um pequeno grupo de sobreviventes de um apocalipse de zumbis, ou \"walkers\", como os personagens os denominam. A maior parte da história se passa nos arredores de Atlanta e, em seguida, em torno da região rural do norte da Geórgia. Os sobreviventes são vistos em busca de refúgio e de um local seguro, longe das hordas de mortos-vivos, que devoram pessoas e que cuja mordida é infecciosa para os seres humanos. Os sobreviventes tem conhecimentos limitados sobre o que realmente está acontecendo no mundo. O enredo da série é voltado principalmente para os dilemas que o grupo enfrenta, como a luta para manterem-se vivos, os sentimentos confusos e os desafios do dia-a-dia em um mundo hostil e praticamente dominado por mortos-vivos. O grupo é liderado por Rick Grimes, que ocupava o posto de vice-xerife de uma pequena cidade antes do surto de zumbis. Juntos precisam adquirir novos meios apropriados de convívio social agora que as estruturas da sociedade entraram em colapso e a realidade se tornou atípica.', 2010, 'Robert Kirkman', '199.00', 'Terror', 'Zumbi'),
(2, 'img/tvd.jpg', 'The Vampire Diaries', 'A cidade fictícia de Mystic Falls, na Virgina, é assombrada por criaturas sobrenaturais. Damon (Ian Somerhalder) e Stefan Salvatore (Paul Wesley) são irmãos que ganharam a condição de vampiro e desde então procuram manter sua imortalidade em segredo. Ao mesmo tempo, buscam resistir à vontade de atacar seres humanos. Ambos conhecem Elena Gilbert (Nina Dobrev), uma linda e popular estudante, e logo se atraem por ela. No entanto, a jovem corresponde apenas um dos interessados, e estes iniciam uma disputa por sua alma.', 2009, 'Julie Plec', '289.00', 'Fantasia', 'Romance'),
(3, 'img/spn.jpg', 'Supernatural', 'Desde que era pequeno, Sam Winchester (Jared Padalecki) tentava escapar do próprio passsado. Após a misteriosa morte de Mary (Samantha Smith), o pai de Sam passou a procurar vingança contra as forças do mal que mataram a esposa, destruindo qualquer ser maligno que cruze o seu caminho. Ao contrário de Sam, Dean (Jensen Ackles), irmão mais velho, sempre quis seguir os passos do pai. Sam está determinado a se livrar do “negócio da família”, mas sua vida está prestes a tomar os rumos que ele não desejava, quando ele fica sem escolhas a não ser unir-se ao irmão.', 2005, 'Eric Kripke', '399.00', 'Drama', 'Fantasia'),
(4, 'img/pb.jpg', 'Prison Break', 'A história gira em torno de Michael Scofield (Wentworth Miller), um homem desesperado por conta de um fato pouco comum: seu irmão Lincoln Burrows (Dominic Purcell) foi condenado à morte por um crime que Michael tem certeza que ele não cometeu. Disposto a salvá-lo, Michael decide roubar um banco a fim de ir parar na mesma prisão onde seu irmão se encontra. A partir daí, ele terá de correr contra o tempo e pôr em prática um plano elaborado para conseguir fugir com Lincoln e provar sua inocência. A série Prison Break é um drama intrigante e que, a cada episódio, adiciona novos elementos a trama, ao passo em que Michael planeja sua grande fuga e tenta resolver a conspiração que o fez encarar a prisão.', 2005, 'Paul Scheuring', '199.00', 'Ação', 'Crime'),
(5, 'img/13rw.jpg', '13 Reasons Why', 'Uma caixa de sapatos é enviada para Clay (Dylan Minnette) por Hannah (Katheriine Langford), sua amiga e paixão platônica secreta de escola. O jovem se surpreende ao ver o remetente, pois Hannah fora acabou de se suicidar. Dentro da caixa, há várias fitas cassete, onde a jovem lista os 13 motivos que a levaram a interromper sua vida – além de instruções para elas serem passadas entre os demais envolvidos. ', 2017, 'Brian Yorkey', '49.00', 'Drama', 'Adolescente'),
(6, 'img/tahm.jpg', 'Two and a Half Men', 'Seu enredo tem como personagem principal Charlie Harper (Charlie Sheen), um solteirão bem de vida que vive numa casa na praia, tem um belo carro na garagem e uma grande facilidade de conquistar as mulheres. Seu estilo de vida casual em Malibu é interrompido quando seu irmão, Alan (Jon Cryer), que está no meio de um divórcio, e seu sobrinho de dez anos, Jake (Angus T. Jones), chegam para morar com ele.', 2003, 'Chuck Lorre', '290.00', 'Comédia', NULL),
(7, 'img/tw.jpg', 'Teen Wolf', 'Gira em torno do socialmente marginalizado Scott McCall, um jovem jogador de Lacrosse na ficcional instituição de ensino Beacon Hills High School, na cidade fictícia de Beacon Hills na Califórnia do Norte. Residente em uma comunidade suburbana normal, uma noite, Scott ouve falar de um corpo cortado morto na floresta e sai em busca, mas acaba por escapar de um ataque de lobisomem com uma mordida no seu abdome. Aos poucos, ele começa a notar mudanças sobrenaturais dentro de si mesmo como sentidos aguçados, maior velocidade, que melhora sua performance em lacrosse e garantindo uma chance de titular. Após a descoberta de que ele é um lobisomem, com a ajuda de seu amor calmante, a sua nova namorada Allison Argent, seu melhor amigo Stiles Stilinski e o novo lobisomem mentor na cidade, Derek Hale, ele é forçado a aprender a equilibrar sua identidade recém-descoberta, entre os muitos perigos que apresenta, com sua vida adolescente. O tema de encontrar o seu lugar é um tom predominante na série que é atrapalhado pelos lobisomens que ali rondam.', 2011, 'Jeff Davis', '175.00', 'Fantasia', 'Suspense'),
(8, 'img/pll.jpg', 'Pretty Little Liars', 'Na pequena cidade de Rosewood, na Pensilvânia, as melhores amigas Spencer Hastings (Troian Bellisario), Aria Montgomery (Lucy Hale), Hanna Marin (Ashley Benson) e Emily Fields (Shay Mitchell) guardam complexos segredos. Alison (Sasha Pieterse), 5ª membra e líder do grupo, desapareceu há um ano e não deixou qualquer pista. As amigas recebem cartas misteriosas assinadas por uma letra e suspeitam que seja sua antiga companheira, mas a desconfiança que possuem em relação ao universo perverso no qual vivem provoca uma reflexão cada vez maior.', 2010, 'I. Marlene King', '190.90', 'Drama', 'Mistério'),
(9, 'img/ga.jpg', 'Greys Anatomy', 'Meredith Grey (Ellen Pompeo) começa a trabalhar no Seattle Grace Hospital e logo descobre que passou a noite com um dos seus chefes, Dr. Derek Shepherd (Patrick Dempsey). Enquanto enfrenta os desafios da vida profissional, ela se aproxima dos outros internos liderados pela residente Dra. Bailey (Chandra Wilson): Cristina Yang (Sandra Oh), Izzie Stevens (Katherine Heigl), George O’Malley (T.R. Knight) e Alex Karev (Justin Chambers).', 2005, 'Shonda Rhimes', '220.00', 'Drama', 'Médico'),
(10, 'img/skins.jpg', 'Skins', 'Acompanha as vidas de um grupo de adolescentes em Bristol, Sudoeste da Inglaterra, pelos dois últimos anos do ensino médio. Suas histórias polêmicas têm explorado questões como famílias disfuncionais, transtorno mental (tais como disfunções alimentares), sexualidade na adolescência, abuso de drogas e morte.', 2007, 'Bryan Elsley', '68.00', 'Drama', 'Adolescente'),
(11, 'img/ahs.jpg', 'American Horror Story', 'A primeira temporada, intitulada American Horror Story: Murder House, ocorre nos dias atuais e é centrada na família Harmon, que se muda para uma mansão restaurada, sem saber que a casa é assombrada pelos seus antigos habitantes. A segunda temporada, intitulada American Horror Story: Asylum, ocorre no ano de 1964 e segue as histórias dos pacientes, médicos e freiras que ocupam uma instituição para criminosos insanos. A terceira temporada, American Horror Story: Coven, volta aos dias atuais, na cidade de Nova Orleans, e exibe os acontecimentos num clã de bruxas originadas de Salém e do vodu. A quarta temporada, American Horror Story: Freak Show trata de um espetáculo de aberrações na cidade de Jupiter, Flórida, em 1950. A quinta temporada, American Horror Story: Hotel, estreou em outubro de 2015 e é ambientada em um hotel macabro.', 2011, 'Ryan Murphy', '129.00', 'Terror', 'Drama'),
(12, 'img/st.jpg', 'Stranger Things', 'Ambientada em Montauk, Long Island, conta a história de um garoto que desaparece misteriosamente. Enquanto a polícia, a família e os amigos procuram respostas, eles acabam mergulhando em um extraordinário mistério, envolvendo um experimento secreto do governo, forças sobrenaturais e uma garotinha muito, muito estranha.', 2016, 'Irmãos Duffer', '23.00', 'Suspense', 'Drama'),
(13, 'img/arrow.jpg', 'Arrow', 'A série conta a história de Oliver Queen (Stephen Amell), um playboy bilionário de Starling City, que passa cinco anos preso em uma ilha após um naufrágio que põe fim a vida de todos a bordo, incluindo seu pai, Robert Queen, e Sara Lance (Caity Lotz), irmã mais nova de sua namorada Laurel Lance (Katie Cassidy) e com quem estava tendo um caso. Após seu retorno à Starling, ele se reencontra com a mãe, Moira Queen (Susanna Thompson), e seu novo marido, Walter Steele (Colin Salmon), o antigo CFO da companhia do seu pai e que agora é o novo CEO.', 2012, 'Greg Berlanti', '179.90', 'Ação', 'Crime'),
(14, 'img/helix.jpg', 'Helix', 'A trama se passa no Ártico, onde o Dr. Hiroshi Hatake, cientista chefe da base de pesquisas científicas da ILARIA, envia um pedido de ajuda à cientistas do CDC (Centro de Controle de Doenças), que são convocados para conter um surto causado por um vírus destruidor até então desconhecido. No decorrer de todo o procedimento são revelados segredos que podem mudar a vida de todos eles, ao passo que mortes e conflitos internos entre os personagens se estabelecem em um clima de tensão. Isolados no meio do nada, cercados de gelo e em quarentena, esses sobreviventes são obrigados a colaborar entre si, se quiserem permanecer vivos.', 2014, 'Cameron Porsandeh', '109.90', 'Terror', 'Ficção Científica'),
(15, 'img/ob.jpg', 'Orphan Black', 'Após presenciar o suicídio de uma desconhecida com a aparência idêntica à sua, Sarah Manning, uma órfã britânica com um histórico de delitos criminais, resolve furtar seus pertences e assumir sua identidade, se passando pela detetive Elizabeth Childs. As intenções iniciais de Sarah eram simplesmente tomar posse do dinheiro contido na conta bancária de Childs e usá-lo para começar uma nova vida com seu irmão adotivo Felix Dawkins e sua filha de 7 anos, Kira. Sarah usa a morte de Beth para despistar seu ex-namorado, um traficante de drogas chamado Victor, assumindo a identidade da policial e, consequentemente, acaba se envolvendo em uma conspiração envolvendo clonagem humana. Sarah então tem de ao mesmo tempo impedir que a polícia descubra sua identidade verdadeira e ajudar suas recém-descobertas irmãs clones a descobrir sua verdadeira origem, além de se proteger de um grupo de fanáticos religiosos que desejam destruí-las.', 2013, 'Graeme Manson', '129.90', 'Ficção Científica', 'Drama'),
(16, 'img/to.jpg', 'The Originals', 'Quando Klaus Mikaelson, o híbrido, vampiro-lobisomem, original recebe uma misteriosa dica de que uma conspiração está se formando contra ele no caldeirão sobrenatural que é o Bairro Francês de Nova Orleans, ele retorna para a cidade que sua família ajudou a construir. As perguntas de Klaus vão levá-lo a um reencontro com seu ex-pupilo diabólico, Marcel, um vampiro carismático que tem o controle total sobre os habitantes humanos e sobrenaturais de Nova Orleans. Determinado a ajudar seu irmão a encontrar a redenção, Elijah segue Klaus e logo descobre que a lobisomen Hayley também chegou ao bairro francês à procura de pistas sobre sua história familiar, e caiu nas mãos de uma poderosa bruxa chamada Sophie. As tensões entre as facções sobrenaturais da cidade estão se aproximando de um ponto de ruptura, Marcel comanda seus seguidores devotados e os rege com poder absoluto. Para Klaus, o pensamento de responder ao seu poderoso protegido é impensável, e ele promete recuperar o que já foi seu – o poder, a cidade e sua família. Enquanto esperam para ver se a sua irmã Rebekah vai deixar Mystic Falls e se juntar a eles, Klaus e Elijah formam uma aliança com as bruxas para garantir que Nova Orleans será governado pelos originais mais uma vez.', 2013, 'Julie Plec', '139.90', 'Drama', 'Fantasia'),
(17, 'img/ouat.jpg', 'Once Upon a Time', 'Acompanhamos as vidas de personagens de contos de fadas que, por conta de uma maldição, vivem no nosso mundo real sem saber sua verdadeira identidade. No centro dessa trama, está Emma (Jennifer Morrison), uma mulher que vê sua vida mudar para sempre, agora que reencontrou o filho que tinha abandonado há anos. O garoto tenta a todo o custo convencê-la de que ela veio de uma realidade alternativa, onde era a filha da Branca de Neve e do Príncipe Encantado, que a deixaram quando bebê, para protegê-la da maldição lançada pela Bruxa Má. E é essa mesma maldição que congelou o mundo de conto de fadas no tempo e trouxe todos os seus personagens para o mundo moderno.', 2011, 'Bon Singuer', '138.90', 'Fantasia', 'Aventura'),
(18, 'img/scream.jpg', 'Scream', 'Depois de um incidente de cyber-bullying resultar em um assassinato brutal, a violência reacende a memória de uma série de assassinatos que ocorreram no passado em Lakewood, que intrigaram alguns e talvez tenham inspirado um novo serial killer. Um grupo de adolescentes, com dois velhos amigos tentando se reconectarem, se tornam amantes, inimigos, suspeitos, alvos e vítimas de um assassino que está à procura de sangue.', 2015, 'Jill Blotevogel', '40.00', 'Terror', 'Mistério'),
(19, 'img/batb.jpg', 'Beauty and the Beast', 'A Detetive Catherine Chandler (Kristin Kreuk) acaba de descobrir que tudo o que ela conhecia sobre sua vida é uma mentira. Determinada a descobrir a verdade sobre sua família, ela precisa ao mesmo tempo entender qual é a sua relação com o charmoso Dr. Vincent Keller (Jay Ryan), que torna-se uma fera todas as vezes que não consegue controlar sua raiva.', 2012, 'Sherri Cooper', '81.90', 'Romance', 'Fantasia'),
(20, 'img/t100.jpg', 'The 100', 'Quando uma guerra nuclear destruiu a civilização e o planeta Terra, os únicos sobreviventes foram 400 pessoas que estavam em 12 estações espaciais em órbita. 97 anos e três gerações depois, a população já contava com 4 mil pessoas, mas os recursos já vão escassos. Para garantir o futuro, um grupo de cem jovens é enviado à superfície da Terra para descobrir se ela está habitável. Com a sobrevivência da raça humana em suas mãos, estes jovens precisam superar suas diferenças e unir forças para cruzar juntos o seu caminho.', 2014, 'Jason Rothenberg', '123.00', 'Ficção Científica', 'Drama'),
(21, 'img/jj.jpg', 'Jessica Jones', 'Jessica Campbell é uma estudante do ensino médio, colega de classe de Peter Parker. Ela perde a família quando o carro colidiu em um comboio militar que carregava radioativos. Após meses em coma, ela acorda e o orfanato a coloca com a família Jones. Mais tarde, ela descobre que agora a radiação lhe concedeu super forças.', 2015, 'Melissa Rosenberg', '84.80', 'Crime', 'Ação'),
(22, 'img/bb.jpg', 'Breaking Bad', 'Walter White é um professor de química na casa dos 50 anos que trabalha em uma escola secundária no Novo México. Para atender às necessidades de Skyler, sua esposa grávida, e Walt Junior, seu filho deficiente físico, ele tem que trabalhar duplamente. Sua vida fica ainda mais complicada quando descobre que está sofrendo de um câncer de pulmão incurável. Para aumentar rapidamente a quantidade de dinheiro que deixaria para sua família após sua morte, Walter usa seu conhecimento de química para fazer e vender metanfetamina, uma droga sintética. Ele conta com a ajuda do ex-aluno e pequeno traficante Jesse e enfrenta vários desafios, incluindo o fato de seu concunhado ser um importante nome dentro da Agência Anti-Drogas da região.', 2008, 'Vince Gilligan', '179.00', 'Crime', 'Suspense'),
(23, 'img/flash.jpg', 'The Flash', 'Barry Allen (Grant Gustin) era um funcionário da Polícia Científica que, ao sofrer um acidente, foi banhado por produtos químicos em seu laboratório e, em seguida, atingido por um raio. Foi a partir disso que ele começou a ser capaz de canalizar os poderes vindos do “Campo de Velocidade”, e se locomover em altíssimas velocidades. Usando uma máscara e um uniforme vermelho, ele começa a usar suas habilidades para patrulhar Central City e descobrir quem foi o assassino de sua mãe.', 2014, 'Greg Berlanti', '122.99', 'Ação', 'Drama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contribua`
--
ALTER TABLE `contribua`
  ADD PRIMARY KEY (`id_contribua`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id_series`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contribua`
--
ALTER TABLE `contribua`
  MODIFY `id_contribua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id_series` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
