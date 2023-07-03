

document.querySelectorAll('.cards__posts-item').forEach(function (item) {
	const cards2 = localStorage.getItem('cards') ? JSON.parse(localStorage.getItem('cards')) : []
	if (cards2.find((find) => find == item.dataset.slug)) {
		document.querySelector('.cards__popup').classList.add('active')
		document.querySelector('.cards__popup').classList.remove('collapsed')
		item.querySelector('.cards__posts-item-label').classList.add('active')
		const html = cards2.map((line) => {
			return `<div class="cards__popup-item" data-slug="${line}"><div class="cards__popup-item-close"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" /></div><div class="cards__popup-item-image"><img src="${
				document.querySelector('.cards__posts-item[data-slug=' + line + '] .cards__posts-item-image img').src
			}" alt=""></div></div>`
		})
		document.querySelector('.cards__popup-inner').innerHTML = html.join('')
		if (cards2.length == 2) {
			document.querySelector('.cards__popup-inner').innerHTML =
				document.querySelector('.cards__popup-inner').innerHTML +
				'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
		}
		if (cards2.length == 1) {
			document.querySelector('.cards__popup-inner').innerHTML =
				document.querySelector('.cards__popup-inner').innerHTML +
				'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
			document.querySelector('.cards__popup-inner').innerHTML =
				document.querySelector('.cards__popup-inner').innerHTML +
				'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
		}
		document.querySelector('.cards__popup-inner').innerHTML =
			document.querySelector('.cards__popup-inner').innerHTML +
			'<div class="cards__popup-button"><button class="cards__popup-btn primary-button">Comparar Tarjetas</button></div>'
		document.querySelectorAll('.cards__popup-btn').forEach(function (item) {
			item.addEventListener('click', function (label) {
				const cards = localStorage.getItem('cards') ? JSON.parse(localStorage.getItem('cards')) : []
				window.location.href = window.location.href + '/tarjetas-comparar/?query=' + cards.join(',')
			})
		})
	}
	item.addEventListener('click', function (label) {
		const cards = localStorage.getItem('cards') ? JSON.parse(localStorage.getItem('cards')) : []
		if (cards.length < 3 && !cards.find((find) => find == item.dataset.slug)) {
			if (item.dataset.slug == 'mastercard-black') {
				console.log(3)
				document
					.querySelectorAll('.cards__posts-item[data-slug=mastercard-black] .cards__posts-item-label')
					.forEach((i) => {
						i.classList.add('active')
					})
			}
			document.querySelector('.cards__popup').classList.add('active')
			document.querySelector('.cards__popup').classList.remove('collapsed')
			localStorage.setItem('cards', JSON.stringify([...cards, item.dataset.slug]))
			const html = [...cards, item.dataset.slug].map((line) => {
				return `<div class="cards__popup-item" data-slug="${line}"><div class="cards__popup-item-close"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" /></div><div class="cards__popup-item-image"><img src="${
					document.querySelector('.cards__posts-item[data-slug=' + line + '] .cards__posts-item-image img')
						.src
				}" alt=""></div></div>`
			})
			document.querySelector('.cards__popup-inner').innerHTML = html.join('')
			if ([...cards, item.dataset.slug].length == 2) {
				document.querySelector('.cards__popup-inner').innerHTML =
					document.querySelector('.cards__popup-inner').innerHTML +
					'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
			}
			if ([...cards, item.dataset.slug].length == 1) {
				document.querySelector('.cards__popup-inner').innerHTML =
					document.querySelector('.cards__popup-inner').innerHTML +
					'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
				document.querySelector('.cards__popup-inner').innerHTML =
					document.querySelector('.cards__popup-inner').innerHTML +
					'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
			}
			document.querySelector('.cards__popup-inner').innerHTML =
				document.querySelector('.cards__popup-inner').innerHTML +
				'<div class="cards__popup-button"><button class="cards__popup-btn primary-button">Comparar Tarjetas</button></div>'
			document.querySelectorAll('.cards__popup-btn').forEach(function (item) {
				item.addEventListener('click', function (label) {
					const cards = localStorage.getItem('cards') ? JSON.parse(localStorage.getItem('cards')) : []
					window.location.href = window.location.href + '/tarjetas-comparar/?query=' + cards.join(',')
				})
			})
			item.querySelector('.cards__posts-item-label').classList.add('active')
		} else {
			if (cards.find((find) => find == item.dataset.slug)) {
				localStorage.setItem('cards', JSON.stringify(cards.filter((find) => find != item.dataset.slug)))
				if (item.dataset.slug == 'mastercard-black') {
					document
						.querySelectorAll('.cards__posts-item[data-slug=mastercard-black] .cards__posts-item-label')
						.forEach((i) => {
							i.classList.remove('active')
						})
				}
				const html = cards
					.filter((find) => find != item.dataset.slug)
					.map((line) => {
						return `<div class="cards__popup-item" data-slug="${line}"><div class="cards__popup-item-close"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" /></div><div class="cards__popup-item-image"><img src="${
							document.querySelector(
								'.cards__posts-item[data-slug=' + line + '] .cards__posts-item-image img',
							).src
						}" alt=""></div></div>`
					})
				document.querySelector('.cards__popup-inner').innerHTML = html.join('')
				if (cards.filter((find) => find != item.dataset.slug).length == 2) {
					document.querySelector('.cards__popup-inner').innerHTML =
						document.querySelector('.cards__popup-inner').innerHTML +
						'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
				}
				if (cards.filter((find) => find != item.dataset.slug).length == 1) {
					document.querySelector('.cards__popup-inner').innerHTML =
						document.querySelector('.cards__popup-inner').innerHTML +
						'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
					document.querySelector('.cards__popup-inner').innerHTML =
						document.querySelector('.cards__popup-inner').innerHTML +
						'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
				}
				document.querySelector('.cards__popup-inner').innerHTML =
					document.querySelector('.cards__popup-inner').innerHTML +
					'<div class="cards__popup-button"><button class="cards__popup-btn primary-button">Comparar Tarjetas</button></div>'
				document.querySelectorAll('.cards__popup-btn').forEach(function (item) {
					item.addEventListener('click', function (label) {
						const cards = localStorage.getItem('cards') ? JSON.parse(localStorage.getItem('cards')) : []
						window.location.href = window.location.href + '/tarjetas-comparar/?query=' + cards.join(',')
					})
				})
				if (cards.length == 1) {
					document.querySelector('.cards__popup').classList.remove('active')
					document.querySelector('.cards__popup').classList.remove('collapsed')
					const html = cards.map((line) => {
						return `<div class="cards__popup-item" data-slug="${line}"><div class="cards__popup-item-close"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" /></div><div class="cards__popup-item-image"><img src="${
							document.querySelector(
								'.cards__posts-item[data-slug=' + line + '] .cards__posts-item-image img',
							).src
						}" alt=""></div></div>`
					})
					document.querySelector('.cards__popup-inner').innerHTML = html.join('')
					if (cards.length == 2) {
						document.querySelector('.cards__popup-inner').innerHTML =
							document.querySelector('.cards__popup-inner').innerHTML +
							'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
					}
					if (cards.length == 1) {
						document.querySelector('.cards__popup-inner').innerHTML =
							document.querySelector('.cards__popup-inner').innerHTML +
							'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
						document.querySelector('.cards__popup-inner').innerHTML =
							document.querySelector('.cards__popup-inner').innerHTML +
							'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
					}
					document.querySelector('.cards__popup-inner').innerHTML =
						document.querySelector('.cards__popup-inner').innerHTML +
						'<div class="cards__popup-button"><button class="cards__popup-btn primary-button">Comparar Tarjetas</button></div>'
					document.querySelectorAll('.cards__popup-btn').forEach(function (item) {
						item.addEventListener('click', function (label) {
							const cards = localStorage.getItem('cards') ? JSON.parse(localStorage.getItem('cards')) : []
							window.location.href = window.location.href + '/tarjetas-comparar/?query=' + cards.join(',')
						})
					})
				}
			}
			item.querySelector('.cards__posts-item-label').classList.remove('active')
		}

		document.querySelectorAll('.cards__popup-item').forEach(function (item) {
			item.querySelector('.cards__popup-item-close') &&
				item.querySelector('.cards__popup-item-close').addEventListener('click', function (e) {
					const cards = localStorage.getItem('cards') ? JSON.parse(localStorage.getItem('cards')) : []
					if (cards.find((find) => find == item.dataset.slug)) {
						console.log(1)
						if (item.dataset.slug == 'mastercard-black') {
							document
								.querySelectorAll('.cards__posts-item[data-slug=mastercard-black] .cards__posts-item-label')
								.forEach((i) => {
									i.classList.remove('active')
								})
						}
						localStorage.setItem('cards', JSON.stringify(cards.filter((find) => find != item.dataset.slug)))
						const html = cards
							.filter((find) => find != item.dataset.slug)
							.map((line) => {
								return `<div class="cards__popup-item" data-slug="${line}"><div class="cards__popup-item-close"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" /></div><div class="cards__popup-item-image"><img src="${
									document.querySelector(
										'.cards__posts-item[data-slug=' + line + '] .cards__posts-item-image img',
									).src
								}" alt=""></div></div>`
							})
						document.querySelector('.cards__popup-inner').innerHTML = html.join('')
						if (cards.filter((find) => find != item.dataset.slug).length == 2) {
							document.querySelector('.cards__popup-inner').innerHTML =
								document.querySelector('.cards__popup-inner').innerHTML +
								'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
						}
						if (cards.filter((find) => find != item.dataset.slug).length == 1) {
							document.querySelector('.cards__popup-inner').innerHTML =
								document.querySelector('.cards__popup-inner').innerHTML +
								'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
							document.querySelector('.cards__popup-inner').innerHTML =
								document.querySelector('.cards__popup-inner').innerHTML +
								'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
						}
						document.querySelector('.cards__popup-inner').innerHTML =
							document.querySelector('.cards__popup-inner').innerHTML +
							'<div class="cards__popup-button"><button class="cards__popup-btn primary-button">Comparar Tarjetas</button></div>'
						document.querySelectorAll('.cards__popup-btn').forEach(function (item) {
							item.addEventListener('click', function (label) {
								const cards = localStorage.getItem('cards') ? JSON.parse(localStorage.getItem('cards')) : []
								window.location.href = window.location.href + '/tarjetas-comparar/?query=' + cards.join(',')
							})
						})
						if (cards.length == 1) {
							document.querySelector('.cards__popup').classList.remove('active')
							document.querySelector('.cards__popup').classList.remove('collapsed')
							const html = cards.map((line) => {
								return `<div class="cards__popup-item" data-slug="${line}"><div class="cards__popup-item-close"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" /></div><div class="cards__popup-item-image"><img src="${
									document.querySelector(
										'.cards__posts-item[data-slug=' + line + '] .cards__posts-item-image img',
									).src
								}" alt=""></div></div>`
							})
							document.querySelector('.cards__popup-inner').innerHTML = html.join('')
							if (cards.length == 2) {
								document.querySelector('.cards__popup-inner').innerHTML =
									document.querySelector('.cards__popup-inner').innerHTML +
									'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
							}
							if (cards.length == 1) {
								document.querySelector('.cards__popup-inner').innerHTML =
									document.querySelector('.cards__popup-inner').innerHTML +
									'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
								document.querySelector('.cards__popup-inner').innerHTML =
									document.querySelector('.cards__popup-inner').innerHTML +
									'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
							}
							document.querySelector('.cards__popup-inner').innerHTML =
								document.querySelector('.cards__popup-inner').innerHTML +
								'<div class="cards__popup-button"><button class="cards__popup-btn primary-button">Comparar Tarjetas</button></div>'
							document.querySelectorAll('.cards__popup-btn').forEach(function (item) {
								item.addEventListener('click', function (label) {
									const cards = localStorage.getItem('cards') ? JSON.parse(localStorage.getItem('cards')) : []
									window.location.href = window.location.href + '/tarjetas-comparar/?query=' + cards.join(',')
								})
							})
						}
						console.log(document.querySelector(`.cards__posts-item[data-slug=${item.dataset.slug}]`))
					}
					document.querySelectorAll('.cards__popup-item').forEach(function (item) {
						item.querySelector('.cards__popup-item-close') &&
							item.querySelector('.cards__popup-item-close').addEventListener('click', function (e) {
								const cards = localStorage.getItem('cards') ? JSON.parse(localStorage.getItem('cards')) : []
								if (cards.find((find) => find == item.dataset.slug)) {
									console.log(1)
									if (item.dataset.slug == 'mastercard-black') {
										document
											.querySelectorAll(
												'.cards__posts-item[data-slug=mastercard-black] .cards__posts-item-label',
											)
											.forEach((i) => {
												i.classList.remove('active')
											})
									}
									localStorage.setItem(
										'cards',
										JSON.stringify(cards.filter((find) => find != item.dataset.slug)),
									)
									const html = cards
										.filter((find) => find != item.dataset.slug)
										.map((line) => {
											return `<div class="cards__popup-item" data-slug="${line}"><div class="cards__popup-item-close"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" /></div><div class="cards__popup-item-image"><img src="${
												document.querySelector(
													'.cards__posts-item[data-slug=' + line + '] .cards__posts-item-image img',
												).src
											}" alt=""></div></div>`
										})
									document.querySelector('.cards__popup-inner').innerHTML = html.join('')
									if (cards.filter((find) => find != item.dataset.slug).length == 2) {
										document.querySelector('.cards__popup-inner').innerHTML =
											document.querySelector('.cards__popup-inner').innerHTML +
											'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
									}
									if (cards.filter((find) => find != item.dataset.slug).length == 1) {
										document.querySelector('.cards__popup-inner').innerHTML =
											document.querySelector('.cards__popup-inner').innerHTML +
											'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
										document.querySelector('.cards__popup-inner').innerHTML =
											document.querySelector('.cards__popup-inner').innerHTML +
											'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
									}
									document.querySelector('.cards__popup-inner').innerHTML =
										document.querySelector('.cards__popup-inner').innerHTML +
										'<div class="cards__popup-button"><button class="cards__popup-btn primary-button">Comparar Tarjetas</button></div>'
									document.querySelectorAll('.cards__popup-btn').forEach(function (item) {
										item.addEventListener('click', function (label) {
											const cards = localStorage.getItem('cards')
												? JSON.parse(localStorage.getItem('cards'))
												: []
											window.location.href =
												window.location.href + '/tarjetas-comparar/?query=' + cards.join(',')
										})
									})
									if (cards.length == 1) {
										document.querySelector('.cards__popup').classList.remove('active')
										document.querySelector('.cards__popup').classList.remove('collapsed')
										const html = cards.map((line) => {
											return `<div class="cards__popup-item" data-slug="${line}"><div class="cards__popup-item-close"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" /></div><div class="cards__popup-item-image"><img src="${
												document.querySelector(
													'.cards__posts-item[data-slug=' + line + '] .cards__posts-item-image img',
												).src
											}" alt=""></div></div>`
										})
										document.querySelector('.cards__popup-inner').innerHTML = html.join('')
										if (cards.length == 2) {
											document.querySelector('.cards__popup-inner').innerHTML =
												document.querySelector('.cards__popup-inner').innerHTML +
												'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
										}
										if (cards.length == 1) {
											document.querySelector('.cards__popup-inner').innerHTML =
												document.querySelector('.cards__popup-inner').innerHTML +
												'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
											document.querySelector('.cards__popup-inner').innerHTML =
												document.querySelector('.cards__popup-inner').innerHTML +
												'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
										}
										document.querySelector('.cards__popup-inner').innerHTML =
											document.querySelector('.cards__popup-inner').innerHTML +
											'<div class="cards__popup-button"><button class="cards__popup-btn primary-button">Comparar Tarjetas</button></div>'
										document.querySelectorAll('.cards__popup-btn').forEach(function (item) {
											item.addEventListener('click', function (label) {
												const cards = localStorage.getItem('cards')
													? JSON.parse(localStorage.getItem('cards'))
													: []
												window.location.href =
													window.location.href + '/tarjetas-comparar/?query=' + cards.join(',')
											})
										})
									}
									console.log(document.querySelector(`.cards__posts-item[data-slug=${item.dataset.slug}]`))
								}
								document.querySelectorAll('.cards__popup-item').forEach(function (item) {
									item.querySelector('.cards__popup-item-close') &&
										item.querySelector('.cards__popup-item-close').addEventListener('click', function (e) {
											const cards = localStorage.getItem('cards')
												? JSON.parse(localStorage.getItem('cards'))
												: []
											if (cards.find((find) => find == item.dataset.slug)) {
												console.log(1)
												if (item.dataset.slug == 'mastercard-black') {
													document
														.querySelectorAll(
															'.cards__posts-item[data-slug=mastercard-black] .cards__posts-item-label',
														)
														.forEach((i) => {
															i.classList.remove('active')
														})
												}
												localStorage.setItem(
													'cards',
													JSON.stringify(cards.filter((find) => find != item.dataset.slug)),
												)
												const html = cards
													.filter((find) => find != item.dataset.slug)
													.map((line) => {
														return `<div class="cards__popup-item" data-slug="${line}"><div class="cards__popup-item-close"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" /></div><div class="cards__popup-item-image"><img src="${
															document.querySelector(
																'.cards__posts-item[data-slug=' + line + '] .cards__posts-item-image img',
															).src
														}" alt=""></div></div>`
													})
												document.querySelector('.cards__popup-inner').innerHTML = html.join('')
												if (cards.filter((find) => find != item.dataset.slug).length == 2) {
													document.querySelector('.cards__popup-inner').innerHTML =
														document.querySelector('.cards__popup-inner').innerHTML +
														'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
												}
												if (cards.filter((find) => find != item.dataset.slug).length == 1) {
													document.querySelector('.cards__popup-inner').innerHTML =
														document.querySelector('.cards__popup-inner').innerHTML +
														'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
													document.querySelector('.cards__popup-inner').innerHTML =
														document.querySelector('.cards__popup-inner').innerHTML +
														'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
												}
												document.querySelector('.cards__popup-inner').innerHTML =
													document.querySelector('.cards__popup-inner').innerHTML +
													'<div class="cards__popup-button"><button class="cards__popup-btn primary-button">Comparar Tarjetas</button></div>'
												document.querySelectorAll('.cards__popup-btn').forEach(function (item) {
													item.addEventListener('click', function (label) {
														const cards = localStorage.getItem('cards')
															? JSON.parse(localStorage.getItem('cards'))
															: []
														window.location.href =
															window.location.href + '/tarjetas-comparar/?query=' + cards.join(',')
													})
												})
												if (cards.length == 1) {
													document.querySelector('.cards__popup').classList.remove('active')
													document.querySelector('.cards__popup').classList.remove('collapsed')
													const html = cards.map((line) => {
														return `<div class="cards__popup-item" data-slug="${line}"><div class="cards__popup-item-close"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" /></div><div class="cards__popup-item-image"><img src="${
															document.querySelector(
																'.cards__posts-item[data-slug=' + line + '] .cards__posts-item-image img',
															).src
														}" alt=""></div></div>`
													})
													document.querySelector('.cards__popup-inner').innerHTML = html.join('')
													if (cards.length == 2) {
														document.querySelector('.cards__popup-inner').innerHTML =
															document.querySelector('.cards__popup-inner').innerHTML +
															'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
													}
													if (cards.length == 1) {
														document.querySelector('.cards__popup-inner').innerHTML =
															document.querySelector('.cards__popup-inner').innerHTML +
															'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
														document.querySelector('.cards__popup-inner').innerHTML =
															document.querySelector('.cards__popup-inner').innerHTML +
															'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
													}
													document.querySelector('.cards__popup-inner').innerHTML =
														document.querySelector('.cards__popup-inner').innerHTML +
														'<div class="cards__popup-button"><button class="cards__popup-btn primary-button">Comparar Tarjetas</button></div>'
													document.querySelectorAll('.cards__popup-btn').forEach(function (item) {
														item.addEventListener('click', function (label) {
															const cards = localStorage.getItem('cards')
																? JSON.parse(localStorage.getItem('cards'))
																: []
															window.location.href =
																window.location.href + '/tarjetas-comparar/?query=' + cards.join(',')
														})
													})
												}
												console.log(
													document.querySelector(`.cards__posts-item[data-slug=${item.dataset.slug}]`),
												)
											}
											document
												.querySelector(
													`.cards__posts-item[data-slug=${item.dataset.slug}] .cards__posts-item-label`,
												)
												.classList.remove('active')
										})
								})
								document
									.querySelector(
										`.cards__posts-item[data-slug=${item.dataset.slug}] .cards__posts-item-label`,
									)
									.classList.remove('active')
							})
					})
					document
						.querySelector(`.cards__posts-item[data-slug=${item.dataset.slug}] .cards__posts-item-label`)
						.classList.remove('active')
				})
		})
	})
})

document.querySelectorAll('.cards__popup-btn').forEach(function (item) {
	item.addEventListener('click', function (label) {
		const cards = localStorage.getItem('cards') ? JSON.parse(localStorage.getItem('cards')) : []
		window.location.href = window.location.href + '/tarjetas-comparar/?query=' + cards.join(',')
	})
})



document.querySelectorAll('.cards__popup-item').forEach(function (item) {
	item.querySelector('.cards__popup-item-close') &&
		item.querySelector('.cards__popup-item-close').addEventListener('click', function (e) {
			const cards = localStorage.getItem('cards') ? JSON.parse(localStorage.getItem('cards')) : []
			if (cards.find((find) => find == item.dataset.slug)) {
				if (item.dataset.slug == 'mastercard-black') {
					document
						.querySelectorAll('.cards__posts-item[data-slug=mastercard-black] .cards__posts-item-label')
						.forEach((i) => {
							i.classList.remove('active')
						})
				}
				localStorage.setItem('cards', JSON.stringify(cards.filter((find) => find != item.dataset.slug)))
				const html = cards
					.filter((find) => find != item.dataset.slug)
					.map((line) => {
						return `<div class="cards__popup-item" data-slug="${line}"><div class="cards__popup-item-close"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" /></div><div class="cards__popup-item-image"><img src="${
							document.querySelector(
								'.cards__posts-item[data-slug=' + line + '] .cards__posts-item-image img',
							).src
						}" alt=""></div></div>`
					})
				document.querySelector('.cards__popup-inner').innerHTML = html.join('')
				if (cards.filter((find) => find != item.dataset.slug).length == 2) {
					document.querySelector('.cards__popup-inner').innerHTML =
						document.querySelector('.cards__popup-inner').innerHTML +
						'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
				}
				if (cards.filter((find) => find != item.dataset.slug).length == 1) {
					document.querySelector('.cards__popup-inner').innerHTML =
						document.querySelector('.cards__popup-inner').innerHTML +
						'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
					document.querySelector('.cards__popup-inner').innerHTML =
						document.querySelector('.cards__popup-inner').innerHTML +
						'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
				}
				document.querySelector('.cards__popup-inner').innerHTML =
					document.querySelector('.cards__popup-inner').innerHTML +
					'<div class="cards__popup-button"><button class="cards__popup-btn primary-button">Comparar Tarjetas</button></div>'
				document.querySelectorAll('.cards__popup-btn').forEach(function (item) {
					item.addEventListener('click', function (label) {
						const cards = localStorage.getItem('cards') ? JSON.parse(localStorage.getItem('cards')) : []
						window.location.href = window.location.href + '/tarjetas-comparar/?query=' + cards.join(',')
					})
				})
				if (cards.length == 1) {
					document.querySelector('.cards__popup').classList.remove('active')
					document.querySelector('.cards__popup').classList.remove('collapsed')
					const html = cards.map((line) => {
						return `<div class="cards__popup-item" data-slug="${line}"><div class="cards__popup-item-close"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" /></div><div class="cards__popup-item-image"><img src="${
							document.querySelector(
								'.cards__posts-item[data-slug=' + line + '] .cards__posts-item-image img',
							).src
						}" alt=""></div></div>`
					})
					document.querySelector('.cards__popup-inner').innerHTML = html.join('')
					if (cards.length == 2) {
						document.querySelector('.cards__popup-inner').innerHTML =
							document.querySelector('.cards__popup-inner').innerHTML +
							'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
					}
					if (cards.length == 1) {
						document.querySelector('.cards__popup-inner').innerHTML =
							document.querySelector('.cards__popup-inner').innerHTML +
							'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
						document.querySelector('.cards__popup-inner').innerHTML =
							document.querySelector('.cards__popup-inner').innerHTML +
							'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
					}
					document.querySelector('.cards__popup-inner').innerHTML =
						document.querySelector('.cards__popup-inner').innerHTML +
						'<div class="cards__popup-button"><button class="cards__popup-btn primary-button">Comparar Tarjetas</button></div>'
					document.querySelectorAll('.cards__popup-btn').forEach(function (item) {
						item.addEventListener('click', function (label) {
							const cards = localStorage.getItem('cards') ? JSON.parse(localStorage.getItem('cards')) : []
							window.location.href = window.location.href + '/tarjetas-comparar/?query=' + cards.join(',')
						})
					})
				}
				console.log(document.querySelector(`.cards__posts-item[data-slug=${item.dataset.slug}]`))
			}
			document.querySelectorAll('.cards__popup-item').forEach(function (item) {
				item.querySelector('.cards__popup-item-close') &&
					item.querySelector('.cards__popup-item-close').addEventListener('click', function (e) {
						const cards = localStorage.getItem('cards') ? JSON.parse(localStorage.getItem('cards')) : []
						if (cards.find((find) => find == item.dataset.slug)) {
							console.log(1)
							if (item.dataset.slug == 'mastercard-black') {
								document
									.querySelectorAll('.cards__posts-item[data-slug=mastercard-black] .cards__posts-item-label')
									.forEach((i) => {
										i.classList.remove('active')
									})
							}
							localStorage.setItem('cards', JSON.stringify(cards.filter((find) => find != item.dataset.slug)))
							const html = cards
								.filter((find) => find != item.dataset.slug)
								.map((line) => {
									return `<div class="cards__popup-item" data-slug="${line}"><div class="cards__popup-item-close"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" /></div><div class="cards__popup-item-image"><img src="${
										document.querySelector(
											'.cards__posts-item[data-slug=' + line + '] .cards__posts-item-image img',
										).src
									}" alt=""></div></div>`
								})
							document.querySelector('.cards__popup-inner').innerHTML = html.join('')
							if (cards.filter((find) => find != item.dataset.slug).length == 2) {
								document.querySelector('.cards__popup-inner').innerHTML =
									document.querySelector('.cards__popup-inner').innerHTML +
									'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
							}
							if (cards.filter((find) => find != item.dataset.slug).length == 1) {
								document.querySelector('.cards__popup-inner').innerHTML =
									document.querySelector('.cards__popup-inner').innerHTML +
									'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
								document.querySelector('.cards__popup-inner').innerHTML =
									document.querySelector('.cards__popup-inner').innerHTML +
									'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
							}
							document.querySelector('.cards__popup-inner').innerHTML =
								document.querySelector('.cards__popup-inner').innerHTML +
								'<div class="cards__popup-button"><button class="cards__popup-btn primary-button">Comparar Tarjetas</button></div>'
							document.querySelectorAll('.cards__popup-btn').forEach(function (item) {
								item.addEventListener('click', function (label) {
									const cards = localStorage.getItem('cards') ? JSON.parse(localStorage.getItem('cards')) : []
									window.location.href = window.location.href + '/tarjetas-comparar/?query=' + cards.join(',')
								})
							})
							if (cards.length == 1) {
								document.querySelector('.cards__popup').classList.remove('active')
								document.querySelector('.cards__popup').classList.remove('collapsed')
								const html = cards.map((line) => {
									return `<div class="cards__popup-item" data-slug="${line}"><div class="cards__popup-item-close"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" /></div><div class="cards__popup-item-image"><img src="${
										document.querySelector(
											'.cards__posts-item[data-slug=' + line + '] .cards__posts-item-image img',
										).src
									}" alt=""></div></div>`
								})
								document.querySelector('.cards__popup-inner').innerHTML = html.join('')
								if (cards.length == 2) {
									document.querySelector('.cards__popup-inner').innerHTML =
										document.querySelector('.cards__popup-inner').innerHTML +
										'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
								}
								if (cards.length == 1) {
									document.querySelector('.cards__popup-inner').innerHTML =
										document.querySelector('.cards__popup-inner').innerHTML +
										'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
									document.querySelector('.cards__popup-inner').innerHTML =
										document.querySelector('.cards__popup-inner').innerHTML +
										'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
								}
								document.querySelector('.cards__popup-inner').innerHTML =
									document.querySelector('.cards__popup-inner').innerHTML +
									'<div class="cards__popup-button"><button class="cards__popup-btn primary-button">Comparar Tarjetas</button></div>'
								document.querySelectorAll('.cards__popup-btn').forEach(function (item) {
									item.addEventListener('click', function (label) {
										const cards = localStorage.getItem('cards')
											? JSON.parse(localStorage.getItem('cards'))
											: []
										window.location.href =
											window.location.href + '/tarjetas-comparar/?query=' + cards.join(',')
									})
								})
							}
							console.log(document.querySelector(`.cards__posts-item[data-slug=${item.dataset.slug}]`))
						}
						document.querySelectorAll('.cards__popup-item').forEach(function (item) {
							item.querySelector('.cards__popup-item-close') &&
								item.querySelector('.cards__popup-item-close').addEventListener('click', function (e) {
									const cards = localStorage.getItem('cards') ? JSON.parse(localStorage.getItem('cards')) : []
									if (cards.find((find) => find == item.dataset.slug)) {
										console.log(1)
										if (item.dataset.slug == 'mastercard-black') {
											document
												.querySelectorAll(
													'.cards__posts-item[data-slug=mastercard-black] .cards__posts-item-label',
												)
												.forEach((i) => {
													i.classList.remove('active')
												})
										}
										localStorage.setItem(
											'cards',
											JSON.stringify(cards.filter((find) => find != item.dataset.slug)),
										)
										const html = cards
											.filter((find) => find != item.dataset.slug)
											.map((line) => {
												return `<div class="cards__popup-item" data-slug="${line}"><div class="cards__popup-item-close"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" /></div><div class="cards__popup-item-image"><img src="${
													document.querySelector(
														'.cards__posts-item[data-slug=' + line + '] .cards__posts-item-image img',
													).src
												}" alt=""></div></div>`
											})
										document.querySelector('.cards__popup-inner').innerHTML = html.join('')
										if (cards.filter((find) => find != item.dataset.slug).length == 2) {
											document.querySelector('.cards__popup-inner').innerHTML =
												document.querySelector('.cards__popup-inner').innerHTML +
												'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
										}
										if (cards.filter((find) => find != item.dataset.slug).length == 1) {
											document.querySelector('.cards__popup-inner').innerHTML =
												document.querySelector('.cards__popup-inner').innerHTML +
												'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
											document.querySelector('.cards__popup-inner').innerHTML =
												document.querySelector('.cards__popup-inner').innerHTML +
												'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
										}
										document.querySelector('.cards__popup-inner').innerHTML =
											document.querySelector('.cards__popup-inner').innerHTML +
											'<div class="cards__popup-button"><button class="cards__popup-btn primary-button">Comparar Tarjetas</button></div>'
										document.querySelectorAll('.cards__popup-btn').forEach(function (item) {
											item.addEventListener('click', function (label) {
												const cards = localStorage.getItem('cards')
													? JSON.parse(localStorage.getItem('cards'))
													: []
												window.location.href =
													window.location.href + '/tarjetas-comparar/?query=' + cards.join(',')
											})
										})
										if (cards.length == 1) {
											document.querySelector('.cards__popup').classList.remove('active')
											document.querySelector('.cards__popup').classList.remove('collapsed')
											const html = cards.map((line) => {
												return `<div class="cards__popup-item" data-slug="${line}"><div class="cards__popup-item-close"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" /></div><div class="cards__popup-item-image"><img src="${
													document.querySelector(
														'.cards__posts-item[data-slug=' + line + '] .cards__posts-item-image img',
													).src
												}" alt=""></div></div>`
											})
											document.querySelector('.cards__popup-inner').innerHTML = html.join('')
											if (cards.length == 2) {
												document.querySelector('.cards__popup-inner').innerHTML =
													document.querySelector('.cards__popup-inner').innerHTML +
													'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
											}
											if (cards.length == 1) {
												document.querySelector('.cards__popup-inner').innerHTML =
													document.querySelector('.cards__popup-inner').innerHTML +
													'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
												document.querySelector('.cards__popup-inner').innerHTML =
													document.querySelector('.cards__popup-inner').innerHTML +
													'<div class="cards__popup-item"><div class="cards__popup-item-image"><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/none-1.png" alt=""></div></div>'
											}
											document.querySelector('.cards__popup-inner').innerHTML =
												document.querySelector('.cards__popup-inner').innerHTML +
												'<div class="cards__popup-button"><button class="cards__popup-btn primary-button">Comparar Tarjetas</button></div>'
											document.querySelectorAll('.cards__popup-btn').forEach(function (item) {
												item.addEventListener('click', function (label) {
													const cards = localStorage.getItem('cards')
														? JSON.parse(localStorage.getItem('cards'))
														: []
													window.location.href =
														window.location.href + '/tarjetas-comparar/?query=' + cards.join(',')
												})
											})
										}
										console.log(document.querySelector(`.cards__posts-item[data-slug=${item.dataset.slug}]`))
									}
									document
										.querySelector(
											`.cards__posts-item[data-slug=${item.dataset.slug}] .cards__posts-item-label`,
										)
										.classList.remove('active')
								})
						})
						document
							.querySelector(`.cards__posts-item[data-slug=${item.dataset.slug}] .cards__posts-item-label`)
							.classList.remove('active')
					})
			})
			document
				.querySelector(`.cards__posts-item[data-slug=${item.dataset.slug}] .cards__posts-item-label`)
				.classList.remove('active')
		})
})
