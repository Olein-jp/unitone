import { useBlockProps, useInnerBlocksProps } from '@wordpress/block-editor';

export default function ( { attributes } ) {
	const { sidebarWidth } = attributes;

	return (
		<div
			{ ...useInnerBlocksProps.save(
				useBlockProps.save( {
					className: 'site-container-fixed-sidebar',
					style: {
						'--unitone--sidebar-width': sidebarWidth || undefined,
					},
				} )
			) }
		/>
	);
}
