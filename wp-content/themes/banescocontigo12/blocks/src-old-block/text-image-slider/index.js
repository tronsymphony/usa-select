import { registerBlockType } from '@wordpress/blocks'

import './style.scss'

import json from './block.json'
import Edit from './edit'
import Save from './save'

const { name } = json

registerBlockType(name, {
	edit: Edit,
	save: Save,
})
