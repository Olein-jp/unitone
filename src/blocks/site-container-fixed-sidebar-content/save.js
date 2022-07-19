import { useBlockProps, useInnerBlocksProps } from '@wordpress/block-editor';

export default function () {
	return (
		<div
			{ ...useInnerBlocksProps.save(
				useBlockProps.save( {
					className: 'site-container-fixed-sidebar__content',
				} )
			) }
		/>
	);
}
