SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
)

INSERT INTO `products` (`id`, `name`, `slug`, `price`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Camera', 'camera', '10000.00', '../images/camera.jpg', 'Registe suas memórias com a EOS M200. Equipada com um sensor CMOS de 24,1 megapixels (APS-C) e Dual Pixel CMOS AF aprimorado com detecção de olho, a EOS M200 facilita a captura de imagens e vídeos de alta qualidade; tudo em um design compacto de uma MirrorLess. Perfeita para compartilhamento em redes sociais, a EOS M200 possui captura de vídeo 4K, suporte ao vídeo na vertical e tecnologias integradas como o Wi-Fi e o Bluetooth , ajudando você a reviver seus momentos favoritos. Projetada para o máximo em criatividade, a EOS M200 oferece recursos fáceis de usar e que deixam sua personalidade brilhar. Explore os filtros criativos da câmera para adicionar um toque de cor e efeitos especiais às suas imagens ou use a função Creative Assist para ajustar facilmente o brilho e o tom das cores. E para os entusiastas de selfies, esta câmera está no ponto, apresentando um modo de auto-retrato e um LCD articulável de 3,0 polegadas que gira 180°, ajudando você a capturar todos os ângulos com muita facilidade. Com a câmera de lente intercambiável EOS M200, a inspiração estará sempre à mão', '2023-01-25 12:47:19', '2023-01-25 12:47:19'),
(2, 'Teclado', 'teclado', '329.00', '../images/teclado.jpg', 'Características: - O Redragon Shiva é feito especialmente para aqueles usuários que buscam um teclado silencioso para uso durante a jogatina. - Sem economizar na iluminação, o Shiva traz um sistema RGB completo para os gamers que buscam estilo no seu equipamento. - Misturando conforto e funcionalidades, este modelo possui 6 teclas macro dedicadas, apoio de pulso magnético e teclas multimídia. Especificações: Switches: Membrana Acionamento: Domo de borracha COR: Preto Formato: Full Size Design: High Profile Layout: ABNT2 Conectividade: USB 2.0 Macros: Sim Software: Sim Altura Ajustável: Sim Materiais do case: Plástico ABS Iluminação: RGB Redragon Chroma Rollover: 26 Teclas Comprimento do cabo: 1.80m Keycaps: Marcadas a laser', '2023-01-25 12:48:38', '2023-01-25 12:48:38'),
(3, 'Mouse', 'mouse', '50.00', '../images/mouse.avif', 'Modelo: M3 \nCor: Preto \nLED: RGB com 16,8 milhões de cores*\nResolução máxima: 4800 DPI*\n\n*Ajustável pelo software\n\nDimensões: 128 x 68 x 40 mm\nPeso: 200g\nMaterial: ABS \nScroll: Em alumínio \nAcabamento: Fosco com base de baixa fricção\n\nComprimento do cabo: 1,8m têxtil trançado\nQuantidade de botões: 06 + scroll\n\nSensor: Óptico, A804 Instan\nSwitch: Huano\nFrequência de resposta: 125hz a 1000 Hz*\n*Ajustável pelo software    \nNão requer a instalação de Driver para funcionamento (Plug & Play)\nCompatibilidade: Windows XP/Vista/Win7/Win8/Win10, Mac OS X 10.2 ou superior**\n\n**As funções e software de configuração não funcionam nos sistemas operacionais MAC, Linux, Ubuntu\n\nGarantia: 06 meses (03 meses de garantia legal do CDC + 03 meses de período de cortesia concedido pela marca)', '2023-01-25 12:48:38', '2023-01-25 12:48:38'),
(4, 'Monitor', 'monitor', '2500.00', '../images/monitor.avif', 'Iluminação Núcleo INFINITY CORE: O Infinity Core da Odyssey é uma adição notável a qualquer mesa, combinando com as primeiras tecnologias do mundo com um design visual deslumbrante.', '2023-01-25 12:48:38', '2023-01-25 12:48:38'),
(5, 'Notebook ideapad', 'notebook-ideapad', '2559.00', '../images/notebook-ideapad.jpg', 'Novo design com 11ª Geração de Processadores Intel Core i5-11300H e placa de vídeo NVIDIA GeForce GTX 1650 4GB\nCom tela de 15.6\'\' Full HD WVA Antirreflexo para melhor definição de imagem e cores', '2023-01-25 15:20:31', '2023-01-25 15:20:31'),
(6, 'Smart TV', 'caderno-classico', '174.00', '../images/smarttv.jpg', 'Painel Dynamic Crystal Color, Design slim, Tela sem limites, Visual Livre de Cabos, Alexa built in, Controle Remoto Único\nCor: preto\nNome do modelo: UN55BU8000GXZD\nTamanho do produto: 55\"', '2023-01-25 15:21:53', '2023-01-25 15:21:53'),
(7, 'Impressora', 'mario-kart-8', '1099.00', '..\\images\\impressora.jpg', 'Mario kart 8', '2023-01-25 15:22:51', '2023-01-25 15:22:51'),
(8, 'MacBook Pro', 'macbook-pro', '20000.00', '..\\images\\macbook.jpg', 'A CPU até 10‐core oferece um desempenho até 3,7 vezes mais rápido para executar as tarefas num instante', '2023-01-25 15:26:42', '2023-01-25 15:26:42'),
(9, 'Smart Tv 8k Samsung', 'smart-tv-8k-samsung', '22500.00', '../images/tvsamsung.jpg', 'Tamanho da tela	75 Polegadas\r\nMarca	SAMSUNG\r\nResolução	8K\r\nPeso do produto	55.7 Quilogramas', '2023-03-22 21:52:27', '2023-03-22 21:52:27'),
(10, 'Smart TV Neo', 'smart-tv-neo', '4639.00', '..\\images\\tvneo.jpg', 'Tamanho da tela	55\r\nMarca	SAMSUNG\r\nTecnologia do visor	Neo QLED\r\nDimensões do produto	2.7D x 122.7W x 70.6H centímetros\r\nResolução	4K\r\nTaxa de atualização	120 Hz\r\nNome do modelo	QN55QN85BAGXZD\r\nComponentes incluídos	Controle, cabo de energia e manual\r\nTecnologia de conectividade	Bluetooth, USB, HDM', '2023-03-22 21:49:07', '2023-03-22 21:49:07');


CREATE TABLE `users` (
  `id` int NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
)


INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Matheus', 'Cavalcante', 'matheus.cavalcant@hotmail.com', '$2y$10$2CSIUj0S2rEehM4li8AJjuht2tKRK4Z/q2AH2WnmFmkUa70G5kkRy', '2023-01-25 13:15:08', '2023-01-25 13:15:08'),
(2, 'Dev', 'Teste', 'dev-teste@hotmail.com', '$2y$10$nCClXn8fbQYg5/paZgdQPe30k3xOzL4yGSBBizrtEGWSGvA2Q5Hsq', '2023-03-22 22:07:36', '2023-03-22 22:07:36');


ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
