tryKey keyName="HKEY_CLASSES_ROOT\Interface\{08FED190-BE19-11D3-A28B-00104BD35090}\ProxyStubClsid32" owner="false">
      <registryValue name="" valueType="REG_SZ" value="{00020424-0000-0000-C000-000000000046}" owner="true" />
    </registryKey>
    <registryKey keyName="HKEY_CLASSES_ROOT\Interface\{08FED190-BE19-11D3-A28B-00104BD35090}\TypeLib" owner="false">
      <registryValue name="" valueType="REG_SZ" value="{F935DC20-1CF0-11D0-ADB9-00C04FD58A0B}" owner="true" />
      <registryValue name="Version" valueType="REG_SZ" value="1.0" owner="true" />
    </registryKey>
    <registryKey keyName="HKEY_CLASSES_ROOT\Component Categories\{0AEE2A92-BCBB-11D0-8C72-00C04FC2B085}\" owner="false">
      <registryValue name="409" valueType="REG_SZ" value="Active Scripting Engine with Authoring" owner="true" />
      <securityDescriptor name="WRP_KEY_DEFAULT_SDDL" />
    </registryKey>
    <registryKey keyName="HKEY_CLASSES_ROOT\Component Categories\{F0B7A1A1-9847-11CF-8F20-00805F2CD064}\" owner="false">
      <registryValue name="409" valueType="REG_SZ" value="Active Scripting Engine" owner="true" />
      <securityDescriptor name="WRP_KEY_DEFAULT_SDDL" />
    </registryKey>
    <registryKey keyName="HKEY_CLASSES_ROOT\Component Categories\{F0B7A1A2-9847-11CF-8F20-00805F2CD064}\" owner="false">
      <registryValue name="409" valueType="REG_SZ" value="Active Scripting Engine with Parsing" owner="true" />
      <securityDescriptor name="WRP_KEY_DEFAULT_SDDL" />
    </registryKey>
    <registryKey keyName="HKEY_CLASSES_ROOT\Component Categories\{F0B7A1A3-9847-11CF-8F20-00805F2CD064}\" owner="false">
      <registryValue name="409" valueType="REG_SZ" value="Active Scripting Engine with Encoding" owner="true" />
      <securityDescriptor name="WRP_KEY_DEFAULT_SDDL" />
    </registryKey>
    <registryKey keyName="HKEY_CLASSES_ROOT\TypeLib\{06290C00-48AA-11D2-8432-006008C3FBFC}\" owner="false">
      <securityDescriptor name="WRP_KEY_DEFAULT_SDDL" />
    </registryKey>
    <registryKey keyName="HKEY_CLASSES_ROOT\TypeLib\{420B2830-E718-11CF-893D-00A0C9054228}\" owner="false">
      <securityDescriptor name="WRP_KEY_DEFAULT_SDDL" />
    </registryKey>
    <registryKey keyName="HKEY_CLASSES_ROOT\TypeLib\{563DC060-B09A-11D2-A24D-00104BD35090}\" owner="false">
      <securityDescriptor name="WRP_KEY_DEFAULT_SDDL" />
    </registryKey>
  </registryKeys>
  <trustInfo>
    <security>
      <accessControl>
        <securityDescriptorDefinitions>
          <securityDescriptorDefinition name="WRP_FILE_DEFAULT_SDDL" sddl="O:S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464G:S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464D:P(A;;FA;;;S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464)(A;;GRGX;;;BA)(A;;GRGX;;;SY)(A;;GRGX;;;BU)S:(AU;FASA;0x000D0116;;;WD)" operationHint="replace" description="Default SDDL for Windows Resource Protected file" />
          <securityDescriptorDefinition name="WRP_KEY_DEFAULT_SDDL" sddl="O:S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464G:S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464D:P(A;CI;GA;;;S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464)(A;CI;GR;;;SY)(A;CI;GR;;;BA)(A;CI;GR;;;BU)" operationHint="replace" />
        </securityDescriptorDefinitions>
      </accessControl>
    </security>
  </trustInfo>
  <localization>
    <resources culture="en-US">
      <stringTable>
        <string id="ManDesc" value="Manifest for Microsoft Scripting" />
        <string id="ManName" value="Microsoft Scripting Manifest" />
      </stringTable>
    </resources>
  </localization>
  <configuration xmlns="urn:schemas-microsoft-com:asm.v3" xmlns:app="ScriptDefaultHostSettings" xmlns:wcm="http://schemas.microsoft.com/WMIConfig/2002/State">
    <configurationSchema>
      <xsd:schema xmlns:xsd="http://www.w3.org/2001/XMLSchema" targetNamespace="ScriptDefaultHostSettings">
        <xsd:element default="Open" name="WSHFileDefault" type="xsd:string" wcm:displayName="HKCR_WSHFile_Shell" wcm:handler="regkey('HKEY_CLASSES_ROOT\WSHFile\Shell')" wcm:legacyName="" wcm:legacyType="REG_SZ" wcm:scope="allUsers" />
        <xsd:element default="Open" name="WSFFileDefault" type="xsd:string" wcm:displayName="HKCR_WSFFile_Shell" wcm:handler="regkey('HKEY_CLASSES_ROOT\WSFFile\Shell')" wcm:legacyName="" wcm:legacyType="REG_SZ" wcm:scope="allUsers" /