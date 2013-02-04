<?php
class Cushy_Boleto_Model_Bancos {
	public function toOptionArray() {
		return array (
				array (
						'value' => 'bb',
						'label' => Mage::helper ( 'adminhtml' )->__ ( 'Banco do Brasil' ) 
				),
				array (
						'value' => 'bradesco',
						'label' => Mage::helper ( 'adminhtml' )->__ ( 'Bradesco' ) 
				),
				array (
						'value' => 'cef',
						'label' => Mage::helper ( 'adminhtml' )->__ ( 'Caixa Economica Federal' ) 
				),
				array (
						'value' => 'cef_sinco',
						'label' => Mage::helper ( 'adminhtml' )->__ ( 'Caixa Economica Federal Sinco' ) 
				),
				array (
						'value' => 'hsbc',
						'label' => Mage::helper ( 'adminhtml' )->__ ( 'HSBC' ) 
				),
				array (
						'value' => 'itau',
						'label' => Mage::helper ( 'adminhtml' )->__ ( 'Itau' ) 
				),
				array (
						'value' => 'santander_banespa',
						'label' => Mage::helper ( 'adminhtml' )->__ ( 'Santander' ) 
				),
				array (
						'value' => 'sudameris',
						'label' => Mage::helper ( 'adminhtml' )->__ ( 'Sudameris' ) 
				) 
		);
	}
	public function toArray() {
		return array (
				'bb' => Mage::helper ( 'adminhtml' )->__ ( 'Banco do Brasil' ),
				'bradesco' => Mage::helper ( 'adminhtml' )->__ ( 'Bradesco' ),
				'cef' => Mage::helper ( 'adminhtml' )->__ ( 'Caixa Economica Federal' ),
				'cef_sinco' => Mage::helper ( 'adminhtml' )->__ ( 'Caixa Economica Federal Sinco' ),
				'hsbc' => Mage::helper ( 'adminhtml' )->__ ( 'HSBC' ),
				'itau' => Mage::helper ( 'adminhtml' )->__ ( 'Itau' ),
				'santander_banespa' => Mage::helper ( 'adminhtml' )->__ ( 'Santander' ),
				'sudameris' => Mage::helper ( 'adminhtml' )->__ ( 'Sudameris' ) 
		);
	}
}
