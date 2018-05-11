<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:module:Magento_Backend:etc/menu.xsd">
    <menu>
        <add id="Pulsestorm_MenuTutorial::top_level_example"
             title="Top Level Example"
             module="Pulsestorm_MenuTutorial"
             sortOrder="9999"
             resource="Magento_Backend::content"
        />
        <!-- START: new node -->
        <add id="Pulsestorm_MenuTutorial::second_level_example"
             title="Second Level Example"
             module="Pulsestorm_MenuTutorial"
             sortOrder="9999"
             resource="Magento_Backend::content"

             parent="Pulsestorm_MenuTutorial::top_level_example"
             action="cms/page/index"
        />
        <!-- END:   new node -->
        <add id="Pulsestorm_MenuTutorial::third_level_example"
             title="Third Level Example"
             module="Pulsestorm_MenuTutorial"
             sortOrder="9999"
             resource="Magento_Backend::content"

             parent="Pulsestorm_MenuTutorial::second_level_example"
             action="cms/page/index"
        />
    </menu>
</config>